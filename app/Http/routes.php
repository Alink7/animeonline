<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

//ruta donde se muestran los ultimos capitulos subidos
Route::get('/anime', function () {
    return view('anime');
});

//ruta para verinformacion de una serie recibiendo como parametro el id
Route::get('/anime/serie/{id}', function ($id){
	return "Usted ha visitado la informacion de la serie con id ".$id;
});

//ruta para ver la informacion del capitulo de una serie recibiendo como
//parametro el id de la serie y del capitulo
Route::get('/anime/serie/{idserie}/capitulo/{idcapitulo}', function($idSerie, $idCapitulo)
{
	return "Usted ha visitado el capitulo ".$idCapitulo." de la serie  ".$idSerie;
});

Route::get('prueba', function () {
    return view('prueba');
});

Route::get('prueba2', function () {
    return view('prueba2');
});
