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




Route::get('/quizzes/create', [QuizController::class, 'create'])->name('quizzes.create');
Route::post('/quizzes', [QuizController::class, 'store'])->name('quizzes.store');



// クイズ関連のルート
Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes.index');
Route::get('/quizzes/{id}', [QuizController::class, 'show'])->name('quizzes.show');
Route::get('/quizzes/{id}/edit', [QuizController::class, 'edit'])->name('quizzes.edit');
Route::post('/quizzes/{id}', [QuizController::class, 'update'])->name('quizzes.update');
Route::delete('/quizzes/{id}', [QuizController::class, 'destroy'])->name('quizzes.destroy');







// ダッシュボード関連のルート
// Route::get('/dashboard', [AuthenticatedSessionController::class, 'create'])->name('dashboard');
// Route::post('/dashboard', [AuthenticatedSessionController::class, 'store']);

// Route::get('/dashboard', function () {
//     return view('dashboard')->name('dashboard');
// });

// 管理者専用ルート（必要に応じて有効化）

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    });
});

// Route::middleware(['auth', 'is_admin'])->group(function () {
//     Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
// });


// Route::resource('quizzes', QuizController::class);


// Route::get('/quizzes/create', function () {
//     return view('quizzes.create');
// });




// routes/web.php
Route::get('/questions', [QuestionController::class, 'index'])->name('questions.index');



Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes.index');
Route::get('/quizzes/create', [QuizController::class, 'create'])->name('quizzes.create');
Route::post('/quizzes', [QuizController::class, 'store'])->name('quizzes.store');
Route::get('/quizzes/{quiz}', [QuizController::class, 'show'])->name('quizzes.show');




Route::put('/quizzes/{id}', [QuizController::class, 'update'])->name('quizzes.update');
