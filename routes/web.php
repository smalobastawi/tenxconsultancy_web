<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\AnnouncementController as AdminAnnouncementController;

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

// Public Blog Routes
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{blogPost}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/blog/category/{category}', [BlogController::class, 'category'])->name('blog.category');

// Public Announcement Routes
Route::get('/announcements/public', [AnnouncementController::class, 'index'])->name('announcements.index');
Route::get('/announcements/{announcement}', [AnnouncementController::class, 'show'])->name('announcements.show');

// Admin Routes (Protected)
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    // Blog Routes
    Route::get('blog', [AdminBlogController::class, 'index'])->name('blog.index');
    Route::get('blog/create', [AdminBlogController::class, 'create'])->name('blog.create');
    Route::post('blog', [AdminBlogController::class, 'store'])->name('blog.store');
    Route::get('blog/{blog}/show', [AdminBlogController::class, 'show'])->name('blog.show');
    Route::get('blog/{blog}/edit', [AdminBlogController::class, 'edit'])->name('blog.edit');
    Route::put('blog/{blog}/update', [AdminBlogController::class, 'update'])->name('blog.update');
    Route::patch('blog/{blog}/update', [AdminBlogController::class, 'update'])->name('blog.update');
    Route::delete('blog/{blog}/destroy', [AdminBlogController::class, 'destroy'])->name('blog.destroy');

    // Announcement Routes
    Route::get('announcements/get', [AdminAnnouncementController::class, 'index'])->name('announcements.index');
    Route::get('announcements/create', [AdminAnnouncementController::class, 'create'])->name('announcements.create');
    Route::post('announcements/create', [AdminAnnouncementController::class, 'store'])->name('announcements.store');
    Route::get('announcements/{announcement}/store', [AdminAnnouncementController::class, 'show'])->name('announcements.show');
    Route::get('announcements/{announcement}/edit', [AdminAnnouncementController::class, 'edit'])->name('announcements.edit');
    Route::put('announcements/{announcement}/update', [AdminAnnouncementController::class, 'update'])->name('announcements.update');
    Route::patch('announcements/{announcement}/postUpdate', [AdminAnnouncementController::class, 'update'])->name('announcements.update');
    Route::delete('announcements/{announcement}/destroy', [AdminAnnouncementController::class, 'destroy'])->name('announcements.destroy');
});

// Home Route
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// Key Areas Routes
Route::get('/research', function () {
    return view('pages.research');
})->name('research');

Route::get('/innovation', function () {
    return view('pages.innovation');
})->name('innovation');

Route::get('/consultancy', function () {
    return view('pages.consultancy');
})->name('consultancy');

// Services Routes
Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/services/research', function () {
    return view('pages.research-services');
})->name('research-services');

Route::get('/services/innovation', function () {
    return view('pages.innovation-services');
})->name('innovation-services');

Route::get('/services/consultancy', function () {
    return view('pages.consultancy-services');
})->name('consultancy-services');

Route::get('/services/training', function () {
    return view('pages.training-services');
})->name('training-services');

// Resources Route
Route::get('/resources', function () {
    return view('pages.resources');
})->name('resources');

// Contact Route
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// Authentication Routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function (\Illuminate\Http\Request $request) {
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (\Illuminate\Support\Facades\Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('/admin/blog');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');
});

Route::post('/logout', function (\Illuminate\Http\Request $request) {
    \Illuminate\Support\Facades\Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->name('logout');