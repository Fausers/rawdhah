<?php

use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\DashCantroller;
use Illuminate\Support\Facades\Route;
use App\Models\Driver;

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
})->name('welcome');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {

    $drivers = Driver::all();
    
    return view('dashboard',compact("drivers"));
})->name('dashboard');




Route::get('/media', [WebsiteController::class,'media'])->name('media');
Route::get('/about_us', [WebsiteController::class,'about'])->name('about');
Route::get('/contact', [WebsiteController::class,'contact'])->name('contact');
Route::post('/contactinfo', [WebsiteController::class,'contactinfo'])->name('contactinfo');
Route::get('/driver-application', [WebsiteController::class,'driver'])->name('driver');
Route::post('/driver-applications', [WebsiteController::class,'driverapplication'])->name('driverapplication');
Route::post('/quoteinfo', [WebsiteController::class,'quoteinfo'])->name('quoteinfo');


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


// Registered and Activated User Routes
Route::group(['middleware' => ['auth']], function () {

    Route::get('/dash', [DashCantroller::class,'dash'])->name('dash');
    Route::get('/drivers', [DashCantroller::class,'drivers'])->name('drivers');
    Route::get('/quotes', [DashCantroller::class,'quotes'])->name('quotes');
    Route::get('/inquiry', [DashCantroller::class,'inquiry'])->name('inquiry');
    Route::get('/detail{id}', [DashCantroller::class,'view'])->name('view_driver');
    
});