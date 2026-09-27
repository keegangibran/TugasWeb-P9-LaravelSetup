<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    $data = [
        'nama' => 'Keegan Gibran Jehian',
        'prodi' => 'Ilmu Komputer',
        'semester' => '3'
    ];

    return view('about', $data);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/hello/{nama}', function ($nama) {
    return view('hello', ['nama' => $nama]);
});