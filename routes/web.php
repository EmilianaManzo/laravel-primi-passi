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

Route::get('/', function(){
    return view('navigatore');
})->name('navigatore');

Route::get('/home', function () {

    // $title = 'Hello World';
    // $author = 'Emy';
    // return view('home',compact('title', 'author'));

    // $data = [
    //     'title'=> 'Hello World',
    //     'author' => 'Emy'
    // ];
    // return view('home', $data);

    return view('home', ['title'=> 'Hello World', 'author' => 'Emy']);

})->name('home');

Route::get('/booleaners', function(){
    return view('booleaners');
})->name('booleaners');

Route::get('/saluti', function(){
    return view('saluti');
})->name('saluti');
