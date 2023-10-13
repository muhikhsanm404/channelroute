<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned tox the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/selasa', function () {
//     return 'Ayo belajar pemrog lanjut laravel';
// });...................

// Route::get('/selasa', [App\Http\Controllers\WarungController::class, 'index']);

// Route::get('/selasa', [WarungController::class, 'index']);

// Route::get('/selasa/namamakan/{id}', [WarungController::class, 'makan']);

Route::get('message/index', [MessageController::class, 'index']);
Route::get('message/send',  [MessageController::class, 'send']);
Route::get('/loginn', function () {
    return view("broadcast");
})->name("login");
Route::get('/register', function () {
    return view("welcome");
})->name("register");
