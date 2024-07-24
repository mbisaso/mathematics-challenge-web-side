<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ChallengeImportController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;


use App\Http\Controllers\ChartController;


Route::get('/', function () {
    return view('welcome');
});



// In routes/web.php
Route::get('/register', function () {
    return view('auth.register');
})->name('register');


Route::get('/index', function () {
    return view('questions.index');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::get('/charts/pie', [App\Http\Controllers\ChartController::class, 'pieChart'])->name('charts.pie');

Route::get('questions/upload', [QuestionsController::class, 'upload'])->name('questions.upload');
Route::post('questions/import', [QuestionsController::class, 'import'])->name('questions.import');





Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');




Route::get('auth', [App\Http\Controllers\AuthController::class, 'edit'])->name('auth.register');

Route::middleware('auth')->group(function () {
    Route::resource('user', App\Http\Controllers\UserController::class)->except(['show']);
    Route::get('profile', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::patch('profile/password', [App\Http\Controllers\ProfileController::class, 'password'])->name('profile.password');

    // Route::get('{page}', [App\Http\Controllers\PageController::class, 'index'])->name('page.index');
    Route::put('/schools/{id}', [SchoolController::class, 'update'])->name('schools.update');
    Route::get('/schools', [SchoolController::class, 'index'])->name('schools.index');
    Route::get('schools/create', [SchoolController::class, 'create'])->name('schools.create');
    Route::post('schools', [SchoolController::class, 'store'])->name('schools.store');
    Route::get('schools/{school}', [SchoolController::class, 'show'])->name('schools.show');
    Route::get('schools/{school}/edit', [SchoolController::class, 'edit'])->name('schools.edit');
    Route::patch('schools/{school}', [SchoolController::class, 'update'])->name('schools.update');
    Route::delete('schools/{school}', [SchoolController::class, 'destroy'])->name('schools.destroy');




   








});





