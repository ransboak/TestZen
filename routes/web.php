<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TestController;
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

    Route::get('/test/start', [TestController::class, 'startTest'])->name('test.start');
    Route::get('/taken-tests', [PageController::class, 'takenTests'])->name('tests.taken');
    // Route::get('/aptitude-test', [TestController::class, 'startTest'])->name('test.start');
    Route::post('/test/submit', [TestController::class, 'submitTest'])->name('test.submit');
    Route::get('/test/result', [TestController::class, 'result'])->name('test.result');
    Route::get('/tests/{test}', [TestController::class, 'showTest'])->name('tests.show');
    Route::get('/dashboard/questions', [PageController::class, 'adminQuestions'])->name('admin.questions');
    Route::post('/addQuestion', [QuestionController::class, 'addQuestion'])->name('question.store');
});







require __DIR__.'/auth.php';
