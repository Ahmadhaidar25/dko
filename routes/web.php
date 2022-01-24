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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'ui_login'])->name('/');
Route::get('register', [App\Http\Controllers\RegisterController::class, 'ui_login'])->name('register');
Route::post('post_register', [App\Http\Controllers\RegisterController::class, 'post_register']);
Route::get('logout' , [App\Http\Controllers\Auth\LoginController::class, 'logout']);

Route::group(['middleware' => 'admin'], function (){
   Route::get('data_kecelakaan1', [App\Http\Controllers\AdminController::class, 'index1']);
   Route::get('data_kecelakaan2', [App\Http\Controllers\AdminController::class, 'index2']);
   Route::get('/hapus-client1/{id}', [App\Http\Controllers\AdminController::class, 'show1']);
    Route::get('/hapus-client2/{id}', [App\Http\Controllers\AdminController::class, 'show2']);
   Route::get('export', [App\Http\Controllers\AdminController::class, 'export_excel']);
   Route::post('kirim-email-acc', [App\Http\Controllers\AdminController::class, 'acc']);
    Route::post('/kirim-email-tolak/{id}', [App\Http\Controllers\AdminController::class, 'tolak']);

});

Route::group(['middleware' => 'client'], function (){
     Route::get('tahap1', [App\Http\Controllers\ClientController::class, 'tahap1']);
     Route::get('tahap2', [App\Http\Controllers\ClientController::class, 'tahap2']);
     Route::post('post-data1', [App\Http\Controllers\ClientController::class, 'store1']);
      Route::post('post-data2', [App\Http\Controllers\ClientController::class, 'store2']);
});