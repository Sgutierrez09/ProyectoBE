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
    if(Auth::check()){

        if(Auth::user()->hasRole('Estudiante')) return redirect('/datos_personales');

        if(Auth::user()->hasRole('Administrador')) return redirect('/home');
    }

    return redirect('/welcome');
});
Route::get('/welcome', 'Mosnoticia@index');
Auth::routes();
Route::group(['middleware' => ['web']], function () {

    Route::group(['middleware' => ['estudiante']], function () {
            Route::resource('/datos_personales', 'CentroController');
            Route::resource('/preguntas', 'PreguntasController');
            Route::get('/home', 'HomeController@index');
    });

    Route::group(['middleware' => ['admin']], function () {
        Route::get('/home', 'HomeController@index');
        Route::get('/inscripcion', 'Inscripcion@index');
        Route::post('/inscripcion', 'Inscripcion@store');
        Route::get('/regnoticia', 'Regnoticia@index');
        Route::resource('/noticias', 'Noticias');
        Route::resource('/reportes', 'Reportes@index');
        Route::resource('/datos_personales', 'CentroController');
    });

});

