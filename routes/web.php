<?php

use Illuminate\Support\Facades\Route;
// invocar el controlador desde su ruta
use App\Http\Controllers\miprimerController;

use App\Http\Controllers\heladosController;

use App\Http\Controllers\ControladorPrecios;
use App\Http\Controllers\cursoController;

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
/*
Lo primero es nombrar la ruta entre comillas simples con el nombre que desee darle. Luego va la coma, seguido de la funcion y el return.
*/
Route::get('/miprimeraruta', function(){
    return 'Estoy aprendiendo laravel. Esta es mi primera ruta';
});

/*
Los parametros son muy importantes en las rutas de la paginas web y los indicamos entre llaves {}. Los parametros van de dentro de la misma ruta
*/
Route::get('/minombre/{nombre}', function($nombre){
    return 'Hola soy ' . $nombre;
});
Route::get('/suma/{n1}/{n2}', function($n1, $n2){
    return 'la suma es ' . $n1 + $n2;
});
Route::get ('micontroller/{a}/{b}',[miprimerController::class,'suma']);

Route::get ('habichuelaconarroz/{a}',[miprimerController::class,'carrera']);

/*la clase va igual que el metodo entre corchetes
la clase va acompañada de ::class, y el metodo tiene que llamarse idual a como esta en la clase y entre comillas simple
*/

Route::get ('heladeria/{opcion}',[heladosController::class, 'helado']);
Route::get('precioss/{prec}',[ControladorPrecios::class, 'precio']);
Route::get('iva/{NombreP}/{precio}',[ControladorPrecios::class, 'getIVA']);
Route::resource('cursos', cursoController::class);
