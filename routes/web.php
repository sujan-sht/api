<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;

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
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');
Route::group(['middleware' => ['auth']],function(){
    Route::get('/dashboard',[ProductController::class,'index'])->name('dashboard');
    Route::get('/show/{product}',[ProductController::class,'show'])->name('show');
    Route::get('/add',[ProductController::class,'create']);
    Route::post('/add',[ProductController::class,'store']);
    Route::get('/edit/{product}',[ProductController::class,'edit']);
    Route::post('/edit/{product}',[ProductController::class,'update']);
    Route::get('/delete/{product}',[ProductController::class,'delete']);
});

Route::get('/',[PageController::class,'index']);


require __DIR__.'/auth.php';
