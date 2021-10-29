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


Route::get('/media', [WebsiteController::class,'media'])->name('media');
Route::get('/about_us', [WebsiteController::class,'about'])->name('about');
Route::get('/contact', [WebsiteController::class,'contact'])->name('contact');
Route::get('/driver-application/', [WebsiteController::class,'driver'])->name('driver');
Route::post('/driver-applications/', [WebsiteController::class,'driverapplication'])->name('driverapplication');


//about company views
Route::get('/company_events', [WebsiteController::class,'events'])->name('events');
Route::get('/company_history', [WebsiteController::class,'history'])->name('history');
Route::get('/company_clients', [WebsiteController::class,'clients'])->name('clients');



//services routes
Route::get('/services', [WebsiteController::class,'services'])->name('services');
Route::get('/ground-shipping', [WebsiteController::class,'ground'])->name('ground');
Route::get('/consulting', [WebsiteController::class,'consulting'])->name('consulting');
Route::get('/warehousing', [WebsiteController::class,'warehousing'])->name('warehousing');
Route::get('/packaging_options', [WebsiteController::class,'packaging'])->name('packaging');
Route::get('/large_projects', [WebsiteController::class,'large_project'])->name('large_projects');
Route::get('/contract_logistics', [WebsiteController::class,'contract_logistics'])->name('contract_logistics');

