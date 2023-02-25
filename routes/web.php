<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControllers;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

//Iniciar sesion con formulario
Route::get('/', [UserControllers::class, 'acceso_login'])->name('login');
Route::get('/login', [UserControllers::class, 'acceso_login'])->name('acceso_login');
Route::post('/login', [UserControllers::class, 'acceso_login_post'])->name('acceso_login_post');

//cerrar cesión
Route::get('/loginOut', [UserControllers::class, 'loginOut_1'])->name('loginOut');

//Url privada, solo puedes entrar si has iniciado sesion, usamos middleware de laravel 
Route::get('/login/table', [UserControllers::class, 'login_table'])->name('login_table');






