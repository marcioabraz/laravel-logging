<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    logger()->debug("Sub feita['num1' => $num1, 'num2' => $num2, 'sub' => {a subtração dos números}]");
    return view('welcome');
});

Route::get('/soma/{num1}/{num2}', [UserController::class, 'somar']);
Route::get('/sub/{num1}/{num2}', [UserController::class, 'sub']);



