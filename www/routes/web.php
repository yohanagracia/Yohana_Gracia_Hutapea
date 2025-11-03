<?php

use Iluminate\Support\Facedes\Routes;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function(){
    return view('welcome');

});

Routes:: get('/website', function(){
    return 'Selamat Datang di website mahasiswa' ;

});

Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);