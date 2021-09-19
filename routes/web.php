<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermohonanController;

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

Route::group(['middleware' => ['auth', 'verified']], function(){
	Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')
	->name('dashboard');

	Route::prefix('user')->middleware(['auth', 'verified'])->group(function () {
			Route::view('profile', 'profile.show');
		});
});

Route::resource('permohonan', PermohonanController::class);

Route::get('/permohonan/pdf', [PermohonanController::class, 'createPDF']);