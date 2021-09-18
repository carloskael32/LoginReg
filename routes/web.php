<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Models\Empleado;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;

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
    return view('auth.login');
});

/* 
Route::get('/empleado', function () {
    return view('empleado.index');
});

Route::get('/empleado/create',[EmpleadoController::class,'create']);
*/
//Todas las rutas de empleado

Route::resource('empleado', EmpleadoController::class)->middleware('auth');

Auth::routes(['register'=>true,'reset'=>false]);


Route::get('/home', [EmpleadoController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [EmpleadoController::class, 'index'])->name('home');

    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

    Route::get('/admin/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');

    Route::get('/auth/register', function () {
        return view('auth.register');
    });

});