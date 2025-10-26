<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    $nama = 'F9NNEC';
    $umur = 18;
    return view('about', ['nama'=> $nama, 'umur'=> $umur]);
    // return view('about', compact('nama','umur'));
    // return view('about')
    //     ->with('nama', 'F9NNEC')
    //     ->with('umur', 19);
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/user', function () {
    return view('user.dashboard');
});

Route::get('/user/{id}', function ($id) {
    return view('user.profile', ['id'=> $id]);
});

Route::get('/userlist', function () {
    $data = [
        ['nama'=> 'adit', 'role' => 'user', 'id' => 1],
        ['nama'=> 'perdi', 'role' => 'user', 'id' => 2],
        ['nama'=> 'galih', 'role' => 'user', 'id' => 3],
    ];
    return view('user.list', ['data'=> $data]);
});

// Route::get('/clear.cache', function () {
//     $run = Artisan::call('config:clear');
//     $run = Artisan::call('cache:clear');
//     $run = Artisan::call('config:cache');
//     return 'Finished';
// });