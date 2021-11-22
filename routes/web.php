<?php
use App\Services\PagarmeRequestService;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|*/


Route::get('/teste', function () {
    return view('welcome');
});

Route::get('/', 'App\Http\Controllers\SiteController@index')->name('inicio_site');

/*Route::get('/', function () {
    return view('paginas.01_bem_vindo');
});*/

Route::get('/quem-somos', 'App\Http\Controllers\SiteController@quemsomos')->name('quemsomos');

Route::get('/nossa-historia', function () {
    return view('paginas.02_nossa_historia');
});

Route::get('/transparencia', 'App\Http\Controllers\SiteController@transparencia')->name('transparencia');

Route::get('/balancos', 'App\Http\Controllers\TransparenciaController@balanco')->name('balancos');

Route::get('/documentos', 'App\Http\Controllers\TransparenciaController@documentos')->name('documentos');

Route::get('/parceiros', 'App\Http\Controllers\TransparenciaController@parceiros')->name('parceiros');



Route::get('/servicos', function () {
    return view('paginas.19_servicos');
});

Route::get('/programas-servicos', 'App\Http\Controllers\SiteController@programas_servicos')->name('programas');


Route::get('/projetos/projetos-educacao', function () {
    return view('paginas.08_projetos_educacao');
});

Route::get('/projetos/projetos-social', function () {
    return view('paginas.09_projetos_social');
});


Route::get('/projetos/projetos-saude', function () {
    return view('paginas.10_projetos_saude');
});

Route::get('/projetos/projetos-equoterapia', function () {
    return view('paginas.11_projetos_equoterapia');
});

Route::get('/fale-conosco', 'App\Http\Controllers\SiteController@fale_conosco')->name('fale-conosco');

Route::get('/projeto/{id}', 'App\Http\Controllers\SiteController@projeto')->name('projeto');

Route::get('/programas-servicos/garantia-direito', 'App\Http\Controllers\SiteController@garantia_de_direito')->name('garantia_de_direito');
Route::get('/programas-servicos/arte-cultura', 'App\Http\Controllers\SiteController@arte_cultura')->name('arte_cultura');
Route::get('/programas-servicos/esporte-lazer', 'App\Http\Controllers\SiteController@esporte_lazer')->name('esporte_lazer');
Route::get('/programas-servicos/sistematizacao', 'App\Http\Controllers\SiteController@sistematizacao')->name('sistematizacao');

Route::get('/noticia/{link}', 'App\Http\Controllers\SiteController@noticia')->name('noticia');
Route::get('/evento/{link}', 'App\Http\Controllers\SiteController@evento')->name('evento');
Route::get('/noticias', 'App\Http\Controllers\SiteController@noticias')->name('noticias');
Route::get('/videos', 'App\Http\Controllers\SiteController@videos')->name('videos');
Route::get('/gestao', 'App\Http\Controllers\SiteController@gestao')->name('gestao');
Route::get('/programas-servicos/assistencia-social', 'App\Http\Controllers\SiteController@social')->name('social');
Route::get('/programas-servicos/educacao-especial', 'App\Http\Controllers\SiteController@educacao')->name('educacao');
Route::get('/programas-servicos/prevencao-saude', 'App\Http\Controllers\SiteController@saude')->name('saude');
Route::get('/programas-servicos/equoterapia', 'App\Http\Controllers\SiteController@equoterapia')->name('equoterapia');
Route::get('/programas-servicos/sustentabilidade', 'App\Http\Controllers\SiteController@sustentabilidade')->name('sustentabilidade');
Route::get('/programas-servicos/gestao-administrativa', 'App\Http\Controllers\SiteController@adm')->name('adm');
Route::get('/programas-servicos/infraestrutura', 'App\Http\Controllers\SiteController@infraestrutura')->name('infraestrutura');
Route::get('/programas-servicos/mobilidade', 'App\Http\Controllers\SiteController@mobilidade')->name('mobilidade');
Route::get('/programas-servicos/tecnologia', 'App\Http\Controllers\SiteController@tecnologia')->name('tecnologia');

Route::get('/garantia-de-direito/atendimento-especial', 'App\Http\Controllers\SiteController@atendimento_especial')->name('atendimento-especial');
Route::get('/garantia-de-direito/autodefensor', 'App\Http\Controllers\SiteController@autodefensor')->name('autodefensor');
Route::get('/garantia-de-direito/atendimento-autista', 'App\Http\Controllers\SiteController@atendimento_autista')->name('atendimento-autista');
Route::get('/garantia-de-direito/cidadania-mais-amor', 'App\Http\Controllers\SiteController@cidadania_mais_amor')->name('cidadania-mais-amor');



Route::get('/doacao', 'App\Http\Controllers\SiteController@doacao')->name('doacao');




/*Rotas para gerenciar boleto bb*/

Route::get('/token', 'App\Http\Controllers\apiController@token')->name('token');
Route::get('/registrar', 'App\Http\Controllers\apiController@registrar')->name('registrar');
Route::get('/listar', 'App\Http\Controllers\apiController@listar')->name('listar');
Route::get('/consultar', 'App\Http\Controllers\apiController@consultar')->name('consultar');
Route::get('/darBaixa', 'App\Http\Controllers\apiController@darBaixa')->name('darBaixa');
Route::get('/atualizar', 'App\Http\Controllers\apiController@atualizar')->name('atualizar');
//Route::get('/gerarBoleto', 'App\Http\Controllers\BoletoController@gerarBoleto')->name('gerarBoleto');

/*Fim das Rotas*/

Route::get('/boleto', function () {
    return view('paginas.17_boleto');
});

Route::post('/boleto_action', 'App\Http\Controllers\PagSeguroController@action_boleto')->name('boleto_action');

//Route::get('/pagar', 'App\Http\Controllers\SiteController@planSubscriptionStoreBillet')->name('gerarBoleto');