<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {



    $data = [
        'title'=> 'Hello World',
        'author' => 'Emy'
    ];
    return view('home', $data);

    return view('home', ['title'=> 'Hello World', 'author' => 'Emy']);

})->name('home');

Route::get('/booleaners', function(){
    $title = 'Booleaners';
    $author = 'Emy';
    return view('home',compact('title', 'author'));
})->name('booleaners');


Route::get('/saluti', function(){
    $data = [
        'title'=> 'Saluti',
        'author' => 'Emy'
    ];
    return view('home', $data);
})->name('saluti');
