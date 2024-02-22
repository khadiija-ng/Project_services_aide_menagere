<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\ClientController;
use App\Models\Candidat;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[TemplateController::class,'index'])->name('homes');
Route::get('/aide',[TemplateController::class,'affiche'])->name('aide');
Route::get('/job',[TemplateController::class,'jobs'])->name('job');
Route::get('/inscription',[TemplateController::class,'inscription'])->name('inscription');
Route::get('/email/{id}',[ClientController::class,'email'])->name('email');
Route::get('/renvoie',[TemplateController::class,'renvoie'])->name('renvoie');
Route::get('/outils',[TemplateController::class,'outils'])->name('outils');

    // Route::get('',[TemplateController::class,'index'])->name('homes');

Route::prefix('admin')->group(function(){
    Route::resource("candidats",CandidatController::class)->names('candidats');
    Route::resource("clients",ClientController::class)->names('clients');
    });
    


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
