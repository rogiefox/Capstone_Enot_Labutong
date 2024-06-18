<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/Ocassion/UserWedding', function () {
    return view('Ocassion/UserWedding');
});

Route::get('/Ocassion/UserValentine', function () {
    return view('Ocassion/UserValentine');
});

Route::get('/Ocassion/UserMothers', function () {
    return view('Ocassion/UserMothers');
});

Route::get('/Ocassion/UserFathers', function () {
    return view('Ocassion/UserFathers');
});

Route::get('/Ocassion/UserBirthday', function () {
    return view('Ocassion/UserBirthday');
});

Route::get('/Ocassion/UserBaby', function () {
    return view('Ocassion/UserBaby');
});

Route::get('/Flower/UserPeonies', function () {
    return view('Flower/UserPeonies');
});

Route::get('/Flower/UserCarnation', function () {
    return view('Flower/UserCarnation');
});

Route::get('/Flower/UserGerberas', function () {
    return view('Flower/UserGerberas');
});

Route::get('/Flower/UserLilies', function () {
    return view('Flower/UserLilies');
});

Route::get('/Flower/UserRose', function () {
    return view('Flower/UserRose');
});

Route::get('/UserContact', function () {
    return view('/UserContact');
});

Route::get('/UserAbout', function () {
    return view('/UserAbout');
});