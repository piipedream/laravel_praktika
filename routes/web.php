<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/createRequest', function () {
    return view('createRequest');
})->middleware('auth')->name('createRequest');

Route::get('/registration', function () {
    return view('registration');
})->name('registration');

Route::post('/createRequests/submit',
'App\Http\Controllers\createRequestController@submit'
)->middleware('auth')->name('request_form');

Route::get('/createRequests/all',
'App\Http\Controllers\createRequestController@allData'
)->middleware('auth')->name('request_data');

Route::get('/createRequests/all/{id}',
'App\Http\Controllers\createRequestController@showOneMessage'
)->middleware('auth')->name('request_data_one');

Route::get('/createRequests/all/{id}/delete',
'App\Http\Controllers\createRequestController@deleteMessage'
)->middleware('auth')->name('request_delete');


Route::name('user.')->group(function(){
    Route::get('/private',
    'App\Http\Controllers\createRequestController@messagesByUser'
    )->middleware('auth')->name('private');

    Route::get('/login', function () {
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        return view('login');
    })->name('login');

    Route::post('/login', 'App\Http\Controllers\LoginController@login');

    Route::get('/logout', function(){
        Auth::logout();
        return redirect(route('home'));
    })->name('logout');

    Route::get('/registration', function () {
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        return view('registration');
    })->name('registration');

    Route::post('/registration', 'App\Http\Controllers\RegisterController@save');
});
