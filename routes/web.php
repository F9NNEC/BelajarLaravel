<?php

use App\Models\Siswa;
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

Route::get('/dashboard', function () {
    return view('user.dashboard');
});

Route::get('/dashboard/{id}', function ($id) {
    return view('user.profile', ['id'=> $id]);
});

Route::get('/userlist', function () {
    $data = Siswa::orderBy('tanggal_lahir', 'desc')->get();
    return view('user.list', ['data'=> $data]);
});

// Route::get('/clear.cache', function () {
//     $run = Artisan::call('config:clear');
//     $run = Artisan::call('cache:clear');
//     $run = Artisan::call('config:cache');
//     return 'Finished';
// });