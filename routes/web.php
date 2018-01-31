<?php
Route::get('/', function () {
    return view('home');
});
Route::get('/post', function () {
    return view('post');
});
Route::get('/form', function () {
    return view('form');
});