<?php

use App\Models\User;
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
Route::middleware(['auth:web'])->group(function() {
    Route::get('/hola', function () {
        return view('hola');
    });
    Route::get('/event', function () {
        $user = User::first();

        $user->notify(new App\Notifications\RealTimeNotification('Hello World'));
        //event(new App\Events\RealTimeMessage('Hello World'));
    });

    Route::get('/chats','ChatController@index')->name('chat.index');
    Route::get('/messages', 'ChatController@fetchMessages');
    Route::post('/messages', 'ChatController@sendMessage');
});
