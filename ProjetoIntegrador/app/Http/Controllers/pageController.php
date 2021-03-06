<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cadastroModel;

class pageController extends Controller
{
    //

    public function exibirAreaQueAtendemos(){
        return view('AreaQueAtendemos');
    }
    public function exibirCadastroDeParceiro(){
        return view('CadastroDeParceiro');
    }
    public function exibirCadastroUsuario(){
        return view('CadastroUsuario');
    }
    public function exibirCareers(){
        return view('Careers');
    }
    public function exibirContato(){
        return view('Contato');
    }
    public function exibirFAQ(){
        return view('FAQ');
    }
    public function exibirListaDeRestaurantes(){
        return view('ListaDeRestaurantes');
    }
    public function exibirListaDeExperiencia(){
        return view('ListaDeExperiencias');
    }
    public function exibirPaginaDeExperiencia(){
        return view('PaginaDeExperiencia');
    }
    public function exibirPaginaDeRestaurante(){
        return view('PaginaDeRestaurante');
    }
    public function exibirPaginaSobreNos(){
        return view('PaginaSobreNos');
    }
    public function exibirPoliticaDePrivacidade(){
        return view('PoliticaDePrivacidade');
    }
    public function exibirTermosDeUso(){
        return view('TermosDeUso');
    }
    public function exibirEditarPerfilRestaurante(){
        return view('EditarPerfilRestaurante');
    }
    public function exibirCarrinho(){
        return view('Carrinho');
    }

    public function exibirCompraAutorizada(){
        return view('CompraAutorizada');
    }
}
