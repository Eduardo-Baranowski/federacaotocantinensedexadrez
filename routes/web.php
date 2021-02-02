<?php

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

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

Route::get('/home', function () {
    return view('welcome');
})->name('home');;

Route::get('/estatuto', function () {
    return view('estatuto');
})->name('estatuto');;

Route::get('/links', function () {
    return view('links');
})->name('links');;

Route::get('/calendario', function () {
    return view('calendario');
})->name('calendario');;

Route::get('/diretoria', function () {
    return view('diretoria');
})->name('diretoria');;

Route::get('/diretortec', function () {
    return view('diretortec');
})->name('diretortec');;

Route::get('/diretorarb', function () {
    return view('diretorarb');
})->name('diretorarb');;

Route::get('/diretormed', function () {
    return view('diretormed');
})->name('diretormed');;

Route::get('/diretorpat', function () {
    return view('diretorpat');
})->name('diretorpat');;

Route::get('/diretorsec', function () {
    return view('diretorsec');
})->name('diretorsec');;

Route::get('/diretortes', function () {
    return view('diretortes');
})->name('diretortes');;

Route::get('/diretorcon1', function () {
    return view('diretorcon1');
})->name('diretorcon1');;

Route::get('/diretorcon2', function () {
    return view('diretorcon2');
})->name('diretorcon2');;

Route::get('/diretorcon3', function () {
    return view('diretorcon3');
})->name('diretorcon3');;

Route::get('/diretorcon1s', function () {
    return view('diretorcon1s');
})->name('diretorcon1s');;

Route::get('/diretorcon2s', function () {
    return view('diretorcon2s');
})->name('diretorcon2s');;

Route::get('/diretorcon3s', function () {
    return view('diretorcon3s');
})->name('diretorcon3s');;

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');;

Route::get('contact', [ContactController::class, 'index'])->name('contact');

Route::post('send', [ContactController::class, 'send'])->name('contact.send');

Route::get('/download', [ContactController::class, 'getDownload'])->name('download');

Route::get('/view', [ContactController::class, 'viewEstatuto'])->name('view');

Auth::routes();



Auth::routes();



Route::group(['middleware' => 'auth'], function () {

    //Route::get('icons', [App\Http\Controllers\PageController::class, 'icons'])->name('pages.icons');

    Route::get('maps', [App\Http\Controllers\PageController::class, 'maps'])->name('pages.maps');

    //Route::get('notifications', [App\Http\Controllers\PageController::class, 'notifications'])->name('pages.notifications');

    //Route::get('tables', [App\Http\Controllers\PageController::class, 'tables'])->name('pages.tables');

    //Route::get('typography', [App\Http\Controllers\PageController::class, 'typography'])->name('pages.typography');

    //Route::get('upgrade', [App\Http\Controllers\PageController::class, 'upgrade'])->name('pages.upgrade');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('user', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('profile', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::put('profile/password', [App\Http\Controllers\ProfileController::class, 'password'])->name('profile.password');
});

