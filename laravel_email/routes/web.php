<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Mail;
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
    // return view('welcome');
    $datos=[
        "titulo"=>"Hola Como estas con el curso",
        "contenido"=>"Esto es una prueba de envio de email"
    ];
    Mail::send("emails.test", $datos,function($mensaje){
        $mensaje->to("jhonnyerg@unicauca.edu.co","juan")->subject("Mensaje de Prueba");
    });
});
