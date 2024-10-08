<?php

use App\Http\Controllers\PemainConstroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pemain', [PemainConstroller::class, 'index']);
