<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    logger()->info('Alguém acesso o site!');
    logger()->debug('Alguém acesso o site!');
    logger()->error('Deu erro?');
    return view('welcome');
});

Route::get('/soma/{num1}/{num2}', [UserController::class, 'somar']);