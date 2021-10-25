<?php

use App\Http\Controllers\WebsiteController;
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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/about_us', [WebsiteController::class,'about'])->name('about');
Route::get('/contact', [WebsiteController::class,'contact'])->name('contact');
Route::get('/driver-application/', [WebsiteController::class,'driver'])->name('driver');
Route::get('/media', [WebsiteController::class,'media'])->name('media');
Route::get('/services', [WebsiteController::class,'services'])->name('services');
