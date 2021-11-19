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

Route::get('/', function () {
    return Auth::check() ? response()->redirectToRoute('home') : view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('logout', function () {
    Auth::logout();
    return response()->redirectTo('/');
});

Route::name('app.')->group(function () {
    Route::name('character.')->prefix('character')->group(function () {
        Route::put('create', "CharactersController@CreateCharacter")->name('create');
        Route::prefix('details/{id}')->name('details.')->group(function () {
            Route::get('/', 'CharactersController@ViewCharacter')->name('view');
            Route::get('{slot}/edit', 'EquipmentController@EditEquipment')->name('editEquipment');
            Route::put('{slot}/save', 'EquipmentController@SaveEquipment')->middleware('optimizeImages')->name('saveEquipment');
            Route::get('delete-all', 'EquipmentController@DeleteAllEquipment')->name('deleteAll');
        });
    });
    Route::name('public.')->prefix('{server}/{account}/{slug}')->group(function() {
        Route::get('/', [\App\Http\Controllers\PublicController::class, 'index'])->name('share');
    });
});

Route::get('#')->name('#');
