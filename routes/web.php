<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaravelController;

 use App\Http\Controllers\NotificationController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/



Route::get('/', [LaravelController::class, 'index']);


Route::get('/localwebstore', [LaravelController::class,
	'store'])->name('store.store');
Route::get('/localwebstore/show/{id}', [LaravelController::class,
	'show'])->name('store.show');





Route::get('/downloadstore',
[LaravelController::class,
'downloadstore'])->name('store.download');



Route::get('send-sms-notification', [NotificationController::class, 'sendSmsNotificaition']);
