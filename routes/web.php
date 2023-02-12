<?php

use Illuminate\Support\Facades\Route;

use app\Http\Controllers\MedicamentsController;
use app\Http\Controllers\OrdonnancesController;
use app\Http\Controllers\PersonnelController;

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
    return view('login');
});

Route::get('/index', function () {
    return View::make('index');
})->middleware('App\Http\Middleware\Authenticate');



Route::get('/personnel', function () {
    return View::make('personnel');
})->middleware('App\Http\Middleware\Authenticate');

Route::get('/rapports', function ()
{
    return View::make('rapports');
})->middleware('App\Http\Middleware\Authenticate');

Route::get('/listemedicaments', function ()
{
    return View::make('listemedicaments');
})->middleware('App\Http\Middleware\Authenticate');


Route::get('/medicaments', function () {
    return View::make('medicaments');
})->middleware('App\Http\Middleware\Authenticate');

Route::get('/medaddform', function () {
    return View::make('medaddform');
})->middleware('App\Http\Middleware\Authenticate');

Route::get('/ordonnances', function () {
    return View::make('ordonnances');
})->middleware('App\Http\Middleware\Authenticate');

Route::get('/medicaments', 'MedicamentsController@index')->name('medicaments.index');

Route::resource('medicaments', 'MedicamentsController');
Route::resource('personnel','PersonnelController');
Route::resource('ordonnances','OrdonnancesController');
Route::resource('listemedicaments','ListemedicamentsController');

Auth::routes();


Route::get('/search', [App\Http\Controllers\MedicamentsController::class, 'search']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Auth::routes();

Route::get('/ordonnances', [App\Http\Controllers\OrdonnancesController::class, 'index'])->name('index')->middleware('App\Http\Middleware\Authenticate');

Auth::routes();

Route::get('/listemedicaments', [App\Http\Controllers\ListemedicamentsController::class, 'index'])->name('index')->middleware('App\Http\Middleware\Authenticate');

Auth::routes();

Route::get('/personnel', [App\Http\Controllers\PersonnelController::class, 'index'])->name('index')->middleware('App\Http\Middleware\Authenticate');




