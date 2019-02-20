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
    return view('welcome');
});
/* *Seleccionar todas las compras con sus detalles asociados. 
*Seleccionar el precio total de las compras ordenado por categoría.*/

Route::get('compra/{tipo}', 'compraController@detalles');

/* Con la base /pelicula/, crea una ruta que dirija a una acción por cada género (entregado como parámetro) en el controlador. Los géneros válidos son Drama, Comedia, Acción y Terror. Cualquier otro género debe devolver error 404.*/
Route::get('pelicula/{genero}', 'peliculaController@pelicula');
Route::resource('pelicula', 'peliculaController');

