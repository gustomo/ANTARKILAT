<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Todo\Todocontroller;
use App\Http\Controllers\PenggunaController;
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
    return view('welcome');
});

Route::get('/home', function () {
    return view('awal');
});



Route::get('/loginn', function () {
    return view('ak.login');
});

Route::get('/registerr', function () {
    return view('ak.register');
});

Route::get('/dataa', function () {
    return view('data');
});


Route :: get('/halo',[halocontroller::class,'index']);

//Route:: get('/todo',function(){
  //  return view ('todo.app');
//});

Route::get('/todo',[Todocontroller::class,'index'])->name('todo');
Route::post('/todo',[Todocontroller::class,'store'])->name('todo.post');
Route::put('/todo/{id}',[Todocontroller::class,'update'])->name('todo.update');
Route::delete('/todo/{id}',[Todocontroller::class,'destroy'])->name('todo.delete');


Route::get('/pengguna',[PenggunaController::class,'tampil'])->name('pengguna.tampil');
Route::get('/pengguna/tambah',[PenggunaController::class,'tambah'])->name('pengguna.tambah');
Route::post('/pengguna/submit',[PenggunaController::class,'submit'])->name('pengguna.submit');
Route::get('/pengguna/edit/{id}',[PenggunaController::class,'edit'])->name('pengguna.edit');
Route::post('/pengguna/update/{id}',[PenggunaController::class,'update'])->name('pengguna.update');
Route::post('/pengguna/delete/{id}',[PenggunaController::class,'delete'])->name('pengguna.delete');


