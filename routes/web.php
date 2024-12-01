<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagManagementController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\PostsManagementController;
use App\Http\Controllers\ReviewsManagementController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware(['auth', 'role:0'])->group(function () {
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/dashboard', 'adminDashboard')->name('admin-dashboard');
        });
        
        Route::group(['prefix' => 'user-management', 'as' => 'user-management.'], function () {
            Route::controller(UserManagementController::class)->group(function () {
                Route::get('/users-list', 'index')->name('index');
                Route::get('/{user}/edit', 'edit')->name('edit');
                Route::patch('/{user}', 'update')->name('update');
                Route::delete('/{user}', 'destroy')->name('destroy');
            });
        });
        
        Route::group(['prefix' => 'tags-management', 'as' => 'tags-management.'], function () {
            Route::controller(TagManagementController::class)->group(function () {
                Route::get('/tags-list', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/', 'store')->name('store');
                Route::get('/{tag}/edit', 'edit')->name('edit');
                Route::patch('/{tag}', 'update')->name('update');
                Route::delete('/{tag}', 'destroy')->name('destroy');
            });
        });
        
        Route::group(['prefix' => 'content-moderation', 'as' => 'content-moderation.'], function () {
            Route::group(['prefix' => 'posts', 'as' => 'posts.'], function () {
                Route::controller(PostsManagementController::class)->group(function () {
                    Route::get('/posts-list', 'index')->name('index');
                    Route::get('/create', 'create')->name('create');
                    Route::post('/', 'store')->name('store');
                    Route::get('/{post}/edit', 'edit')->name('edit');
                    Route::patch('/{post}', 'update')->name('update');
                    Route::delete('/{post}', 'destroy')->name('destroy');
                    Route::get('/{post}/approve', 'approve')->name('approve');
                    Route::get('/{post}/reject', 'reject')->name('reject');
                });
            });
            
            Route::group(['prefix' => 'reviews', 'as' => 'reviews.'], function () {
                Route::controller(ReviewsManagementController::class)->group(function () {
                    Route::get('/reviews-list', 'index')->name('index');
                    Route::get('/create', 'create')->name('create');
                    Route::post('/', 'store')->name('store');
                    Route::get('/{review}/edit', 'edit')->name('edit');
                    Route::patch('/{review}', 'update')->name('update');
                    Route::delete('/{review}', 'destroy')->name('destroy');
                    Route::get('/{review}/approve', 'approve')->name('approve');
                    Route::get('/{review}/reject', 'reject')->name('reject');
                });
            });
        });
        
        Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
            Route::controller(ProfileController::class)->group(function () {
                Route::get('/', 'edit')->name('edit');
                Route::patch('/', 'update')->name('update');
                Route::delete('/', 'destroy')->name('destroy');
            });
        });
    });
});

Route::middleware(['auth', 'role:1'])->group(function () {
    Route::group(['prefix' => 'tutor', 'as' => 'tutor.'], function () {
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/dashboard', 'tutorDashboard')->name('tutor-dashboard');
        });
        
        Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
            Route::controller(ProfileController::class)->group(function () {
                Route::get('/', 'edit')->name('edit');
                Route::patch('/', 'update')->name('update');
                Route::delete('/', 'destroy')->name('destroy');
            });
        });
    });
});

Route::middleware(['auth', 'role:2'])->group(function () {
    Route::group(['prefix' => 'student', 'as' => 'student.'], function () {
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/dashboard', 'studentDashboard')->name('student-dashboard');
        });
        
        Route::group(['prefix' => 'posts', 'as' => 'posts.'], function () {
            Route::controller(PostsManagementController::class)->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/', 'store')->name('store');
                Route::get('/{post}/edit', 'edit')->name('edit');
                Route::patch('/{post}', 'update')->name('update');
                Route::delete('/{post}', 'destroy')->name('destroy');
            });
        });
        
        Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
            Route::controller(ProfileController::class)->group(function () {
                Route::get('/', 'edit')->name('edit');
                Route::patch('/', 'update')->name('update');
                Route::delete('/', 'destroy')->name('destroy');
            });
        });
    });
});

require __DIR__ . '/auth.php';
