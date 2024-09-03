<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

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

// ユーザー一覧を表示するルート
Route::get('/users', [UserController::class, 'index']);

Route::get('/index', function () {
    return view('index');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// クイズ関連のルート
Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes.index');
Route::get('/quizzes/{id}', [QuizController::class, 'show'])->name('quizzes.show');
Route::get('/quizzes/{id}/edit', [QuizController::class, 'edit'])->name('quizzes.edit');
Route::post('/quizzes/{id}', [QuizController::class, 'update'])->name('quizzes.update');
Route::delete('/quizzes/{id}', [QuizController::class, 'destroy'])->name('quizzes.destroy');

// ダッシュボード関連のルート
Route::get('/dashboard', [AuthenticatedSessionController::class, 'create'])->name('dashboard');
Route::post('/dashboard', [AuthenticatedSessionController::class, 'store']);

