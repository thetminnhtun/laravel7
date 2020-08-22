<?php

use Illuminate\Support\Facades\Route;
use Jenssegers\Agent\Agent;

Route::get('/', function () {
    $agent = new Agent();
    return view('welcome', compact('agent'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
