<?php

use App\Http\Controllers\Backend\KeyGenerateController;
use App\Http\Controllers\RegistrationController;
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

Route::get('/',function (){
    return view('login');
})->name('login');

Route::get('registration',function (){
    return view('registration');
})->name('registration');

Route::resource('auth', RegistrationController::class);
Route::post('auth-login', [RegistrationController::class, 'authLogin'])->name('auth.login');

Route::middleware('auth')->group(function () {
    Route::post('logout', [RegistrationController::class, 'logout'])->name('logout');
    Route::resource('user-key-generate', KeyGenerateController::class);
    Route::get('my-profile', [KeyGenerateController::class,'myProfile'])->name('my.profile');
    Route::get('all-user',[KeyGenerateController::class,'allUser'])->name('all.user');
    Route::get('get-user-details',[KeyGenerateController::class,'getDetails']);
    Route::get('get-key-generate',[KeyGenerateController::class,'getKeyGenerate']);
    Route::get('active-license',[KeyGenerateController::class,'activeLicense'])->name('active.license');
    Route::get('active-license-by-key',[KeyGenerateController::class,'activeLicenseByKey']);
});


