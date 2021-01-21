<?php

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

Route::get('/',['as'=>'front.home','uses'=>'Front\FrontController@index']);
Route::get('/trianon',['as'=>'front.home2','uses'=>'Front\FrontController@index']);
Route::get('/sobre',['as'=>'front.about','uses'=>'Front\FrontController@about']);
Route::get('/contato',['as'=>'front.contact','uses'=>'Front\FrontController@contact']);
Route::get('/resultados',['as'=>'front.results','uses'=>'Front\FrontController@results']);
Route::get('/exames',['as'=>'front.exams','uses'=>'Front\FrontController@exams']);
Route::get('/laboratorios/dracena',['as'=>'front.dracena','uses'=>'Front\FrontController@dracena']);
Route::get('/laboratorios/tupi-paulista',['as'=>'front.tupi','uses'=>'Front\FrontController@tupi']);
Route::get('/laboratorios/junqueiropolis',['as'=>'front.junqueiropolis','uses'=>'Front\FrontController@junqueiropolis']);
Route::get('/laboratorios/panorama',['as'=>'front.panorama','uses'=>'Front\FrontController@panorama']);
Route::get('/laboratorios/brasilandia',['as'=>'front.brasilandia','uses'=>'Front\FrontController@brasilandia']);
Route::get('/links-uteis',['as'=>'front.links','uses'=>'Front\FrontController@links']);
Route::get('/duvidas-frequentes',['as'=>'front.duvidas','uses'=>'Front\FrontController@duvidas']);
Route::get('/planos-de-saude',['as'=>'front.planos','uses'=>'Front\FrontController@planos']);

Route::get('/pacientes',['as'=>'pacientes.home','uses'=>'Front\PacientesController@index']);
Route::get('/pacientes/gestantes',['as'=>'pacientes.gestante','uses'=>'Front\PacientesController@gestante']);
Route::get('/pacientes/prepare-se-para-um-exame',['as'=>'pacientes.prepare','uses'=>'Front\PacientesController@prepare']);
Route::get('/pacientes/cardiopulmonar',['as'=>'pacientes.cardio','uses'=>'Front\PacientesController@cardio']);
Route::get('/pacientes/colesterol',['as'=>'pacientes.colesterol','uses'=>'Front\PacientesController@colesterol']);
Route::get('/pacientes/genetico',['as'=>'pacientes.genetico','uses'=>'Front\PacientesController@genetico']);
Route::get('/pacientes/plaquetopenia',['as'=>'pacientes.plaquetopenia','uses'=>'Front\PacientesController@plaquetopenia']);
Route::get('/pacientes/exame-toxicologico',['as'=>'pacientes.toxico','uses'=>'Front\PacientesController@toxico']);
Route::get('/pacientes/exame-de-sexagem-fetal',['as'=>'pacientes.sexagem','uses'=>'Front\PacientesController@sexagem']);
Route::get('/pacientes/exame-de-dna',['as'=>'pacientes.dna','uses'=>'Front\PacientesController@dna']);

Route::get('/noticias',['as'=>'news','uses'=>'NewsController@index']);
Route::get('/noticias/todos-juntos-contra-o-coronavirus',['as'=>'news.post','uses'=>'NewsController@post']);
Route::get('/noticias/realizamos-teste-rapido-para-covid-19',['as'=>'news.post2','uses'=>'NewsController@post2']);
Route::get('/noticias/esta-com-duvida-sobre-qual-exame-de-covid-realizar',['as'=>'news.post3','uses'=>'NewsController@post3']);
Route::get('/noticias/outubro-rosa-novembro-azul',['as'=>'news.post4','uses'=>'NewsController@post4']);
Route::get('/noticias/teste-rapido-covid-19-antigeno',['as'=>'news.post5','uses'=>'NewsController@post5']);
