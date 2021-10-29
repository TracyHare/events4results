<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::get('/', [RegistrationController::class, 'index'])->name('home');

Route::post('/', [RegistrationController::class, 'store'])->name('home');



Route::get('/test', function() {
    $file = Storage::get('business_planning.ics');
    dd($file);
});
