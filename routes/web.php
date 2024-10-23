<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\ProfileController;


Route::middleware(['auth', 'can:admin-only'])->group(function () {
    Route::get('/admin/manage-users', [AdminController::class, 'manageUsers'])->name('admin.manage.users');
    
    Route::group(['prefix' => '/admin', 'as' => 'admin.'], function () {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('index');
        Route::get('/create', [AdminController::class, 'create'])->name('create');
        Route::post('/', [AdminController::class, 'store'])->name('store');
        Route::get('/{styleArchive}/edit', [AdminController::class, 'edit'])->name('edit');
        Route::put('{styleArchive}', [AdminController::class, 'update'])->name('update');
        Route::delete('{styleArchive}', [AdminController::class, 'destroy'])->name('delete');
        Route::get('{styleArchive}/approve', [AdminController::class, 'approve'])->name('approve');
        Route::get('{styleArchive}/draft', [AdminController::class, 'draft'])->name('draft');
    });
});

Route::middleware(['auth', 'can:tutor-only'])->group(function () {
    Route::group(['prefix' => '/tutor', 'as' => 'tutor.'], function () {
        Route::get('/dashboard', [TutorController::class, 'index'])->name('index');
        Route::get('/profile', [TutorController::class, 'profile'])->name('profile');
        Route::post('/update-profile', [TutorController::class, 'updateProfile'])->name('update.profile');
        Route::get('/schedule', [TutorController::class, 'schedule'])->name('schedule');
    });
});

Route::middleware(['auth', 'can:parent-only'])->group(function () {
    Route::group(['prefix' => '/parent', 'as' => 'parent.'], function () {
        Route::get('/dashboard', [ParentController::class, 'index'])->name('index');
        Route::get('/search-tutors', [ParentController::class, 'searchTutors'])->name('search.tutors');
        Route::post('/book-tutor', [ParentController::class, 'bookTutor'])->name('book.tutor');
    });
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

require __DIR__ . '/auth.php';
