<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\compraModel;
use App\experienciaModel;
use App\Order;
use Illuminate\Support\Facades\Auth;

class carrinhoController extends Controller
{
    public function adicionarCarrinho($produtos){
        
        $produto = experienciaModel::find($produtos);

        $vac = compact('produto');
        
        \Cart::session(auth()->id())->add(array(
            'id' => random_int(1,9999999),
            'name' => $produto->nomeExperiencia,
            'price' => $produto->precoExperiencia,
            'quantity' => request('participantes'),
            'attributes' => array(),
            'associatedModel' => $produto
        ));        

        $vac = compact('produto');

        return redirect()->route('carrinho.exibir', $vac);

    }

    public function exibirCarrinho(){

        $itensCarrinho = \Cart::session(auth()->id())->getContent()->reverse();

        return view('Carrinho', compact('itensCarrinho'));

    }

    public function deletarCarrinho($itemId){

        \Cart::session(auth()->id())->remove($itemId);

        return back();

    }

    public function editarCarrinho($rowId){

        \Cart::session(auth()->id())->update($rowId,[
            'quantity' => array(
                'relative' => false,
                'value' => request('quantidadeCarrinho'),
        )]);
        
        return back();

    }

    public function exibirCarrinhoCheckout(){

        $itensCarrinho = \Cart::session(auth()->id())->getContent();

        return view('PaginaDePagamento', compact('itensCarrinho'));

    }

    public function checkout(){

        $order = new compraModel();

        $order->name = request('name');
        $order->id_experiencia = request('id_experiencia');
        $order->id_compra = random_int(1,9999999);
        $order->id_usuario = auth()->id();
        $order->quantidade_pessoas = request('quantidadeCarrinho');

        $order -> save();

        \Cart::session(auth()->id())->clear();

        $data = ['key' => Auth::user()];

        \Mail::send('EmailCompraAutorizada', $data, function($message){

        $message->from('buyhoodlocalfoods@gmail.com', 'BuyHood');

        $message->to(Auth::user()->email,Auth::user()->name)->subject('Sua compra no BuyHood');

        //$message->attach($pathToFile);
});

        return view('CompraAutorizada');
    }

    public function ativarCompra(Request $request){
        $ativacao = compraModel::find($request->id_compra);
        $ativacao->usado = 1;
        $ativacao->update();

        return view('AtivarExperiencia');
    }

    public function compraAtiva(){

        $minhasCompras = compraModel::paginate(15)->reverse();
        
        $vac2 = compact('minhasCompras');

        return view('ExperienciaAtivada', $vac2);
    }

}
