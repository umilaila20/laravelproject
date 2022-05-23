<?php

use Illuminate\Support\Facades\Route;

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

route::get('/siswa',  function(){
    $nama = 'ila';
    $nilai = [80, 30, 45, 70, 90];
    return view('siswa', compact ('nama', 'nilai'));
});
