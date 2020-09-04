<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/home');
});

//CRUD de Experiências --------------------------------------------------------------------
Route::get('/ListaDeExperiencias', 'experienciaController@listarExperiencias');

Route::get('/Experiencia/{id_experiencia}', 'experienciaController@detalhesExperiencia');

Route::get('/CadastroDeExperiencia', 'experienciaController@cadastrarExperiencia');
Route::post('/CadastroDeExperiencia', 'experienciaController@cadastrarExperiencia');

Route::get('/EditarExperiencia/{id}', 'experienciaController@editarExperiencia');
Route::post('/EditarExperiencia/{id}', 'experienciaController@editarExperiencia');

Route::get('/DeletarExperiencia/{id}', 'experienciaController@deletarExperiencia');
//CRUD de Experiências --------------------------------------------------------------------

Route::get('/Area-de-Atendimento', 'pageController@exibirAreaQueAtendemos');

Route::get('/Careers', 'pageController@exibirCareers');

Route::get('/Contato', 'pageController@exibirContato');

Route::get('/FAQ', 'pageController@exibirFAQ');

Route::get('/Pagamento', 'pageController@exibirPaginaDePagamento');

Route::get('/SobreNos', 'pageController@exibirPaginaSobreNos');

Route::get('/PoliticaDePrivacidade', 'pageController@exibirPoliticaDePrivacidade');

Route::get('/TermosDeUso', 'pageController@exibirTermosDeUso');

Route::get('/home', 'pageController@exibirHome')->name('home');

Route::get('/Layout', 'pageController@layout');

//CRUD de Usuário --------------------------------------------------------------------
Auth::routes();

Route::get('/PaginaDePerfil/{id}', 'usuarioController@exibirPerfil');

Route::get('/EditarPerfil/{id}', 'usuarioController@editarPerfil');
Route::post('/EditarPerfil/{id}', 'usuarioController@editarPerfil');

Route::get('/DeletarPerfil/{id}', 'usuarioController@deletarPerfil');
//CRUD de Experiências --------------------------------------------------------------------
