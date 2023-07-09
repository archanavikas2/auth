<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutControlleer;
use App\Http\Controllers\HomeController;

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

// Route::get('/about_us', [App\Http\Controllers\HomeController::class, 'view'])->name('about_us');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about_us', [App\Http\Controllers\AboutControlleer::class, 'view'])->name('about_us');
Route::get('/Infrastructure', [App\Http\Controllers\AboutControlleer::class, 'itra'])->name('Infrastructure');

Route::get('/Contect', [App\Http\Controllers\AboutControlleer::class, 'cont'])->name('Contect');

Route::get('/pvd-louver-panels', [App\Http\Controllers\AboutControlleer::class, 'pvd'])->name('pvd-louver-panels');

Route::get('/pvd-metal-sheets', [App\Http\Controllers\AboutControlleer::class, 'sheet'])->name('pvd-metal-sheets');

Route::get('/textured-sheets', [App\Http\Controllers\AboutControlleer::class, 'text'])->name('textured-sheets');


Route::get('/stainless-steel-decorative-profiles', [App\Http\Controllers\AboutControlleer::class, 'stain'])->name('stainless-steel-decorative-profiles');
