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

Route::get('/', function () {
    return view('plantilla');
});
// Ruta para los botones
//Route::view('/', 'paginas.blog');
//Route::view('/administradores', 'paginas.administradores');
//Route::view('/anuncios', 'paginas.anuncios');
//Route::view('/articulos', 'paginas.articulos');
//Route::view('/banner', 'paginas.banner');
//Route::view('/blog', 'paginas.blog');
//Route::view('/categorias', 'paginas.categorias');
//Route::view('/opiniones', 'paginas.opiniones');

//Ruta para traer el contenido de cada boton
//Route::get('/','BlogController@traerBlog');
//Route::get('/administradores','AdministradoresController@traerAdministradores');
//Route::get('/anuncios','AnunciosController@traerAnuncios');
//Route::get('/articulos','ArticulosController@traerArticulos');
//Route::get('/banner','BannerController@traerBanner');
//Route::get('/categorias','CategoriasController@traerCategorias');
//Route::get('/opiniones','OpninionesController@traerOpiniones');
 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Rutas que incluyen todos los metodos HTTP

Route::resource('/', 'BlogController');
Route::resource('/blog', 'BlogController');
Route::resource('/administradores','AdministradoresController');
Route::resource('/anuncios','AnunciosController');
Route::resource('/articulos','ArticulosController');
Route::resource('/banner','BannerController');
Route::resource('/categorias','CategoriasController');
Route::resource('/opiniones','OpninionesController');