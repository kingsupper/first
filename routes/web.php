<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\DB;

Route::get('/', function () {

    $result = DB::table('categories')->get();

    return view('/welcome', ['categories' => $result ]);
});

Route::get('/about', function () {
    return view('/about');
});

Route::get('/product', function () {

    $result = DB::table('products')->get();

    return view('product', ['products' => $result]);
});

Route::get('/category', function () {
    return view('category', [
        'name' => 'mr. dragon',
        'age' => 30,
        'career' =>'backend develop',
        'salary' => 3000
    ]);
});
