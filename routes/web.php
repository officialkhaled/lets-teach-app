<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JobPostsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TutorProfileController;
use App\Http\Controllers\TagManagementController;
use App\Http\Controllers\StudentProfileController;
use App\Http\Controllers\PostsManagementController;
use App\Http\Controllers\ReviewsManagementController;
use App\Http\Controllers\RolePermission\RoleController;
use App\Http\Controllers\RolePermission\UserController;
use App\Http\Controllers\AdminPostsManagementController;
use App\Http\Controllers\RolePermission\PermissionController;

Route::get('/', function () {
//    return view('welcome');
    return redirect()->route('login');
})->name('home');

Route::middleware(['auth', 'role:super-admin|admin'])->group(function () {
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/dashboard', 'adminDashboard')->name('admin-dashboard');
        });

        Route::group(['prefix' => 'settings', 'as' => 'settings.'], function () {
            Route::resource('permissions', PermissionController::class);
            Route::get('permissions/{permissionId}/delete', [PermissionController::class, 'destroy']);

            Route::resource('roles', RoleController::class);
            Route::get('roles/{roleId}/delete', [RoleController::class, 'destroy']);
            Route::get('roles/{roleId}/give-permissions', [RoleController::class, 'addPermissionToRole']);
            Route::put('roles/{roleId}/give-permissions', [RoleController::class, 'givePermissionToRole']);

            Route::resource('users', UserController::class);
            Route::get('users/{userId}/delete', [UserController::class, 'destroy']);
        });

        Route::group(['prefix' => 'tags-management', 'as' => 'tags-management.'], function () {
            Route::group(['prefix' => 'tags'], function () {
                Route::controller(TagManagementController::class)->group(function () {
                    Route::get('/', 'index')->name('index');
                    Route::get('/create', 'create')->name('create');
                    Route::post('/', 'store')->name('store');
                    Route::get('/{tag}/edit', 'edit')->name('edit');
                    Route::patch('/{tag}', 'update')->name('update');
                    Route::delete('/{tag}', 'destroy')->name('destroy');
                });
            });
        });

        Route::group(['prefix' => 'content-moderation', 'as' => 'content-moderation.'], function () {
            Route::group(['prefix' => 'posts', 'as' => 'posts.'], function () {
                Route::controller(AdminPostsManagementController::class)->group(function () {
                    Route::get('/', 'index')->name('index');
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

Route::middleware(['auth', 'role:tutor'])->group(function () {
    Route::group(['prefix' => 'tutor', 'as' => 'tutor.'], function () {
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/dashboard', 'tutorDashboard')->name('tutor-dashboard');
        });

        Route::group(['prefix' => 'job-posts', 'as' => 'job-posts.'], function () {
            Route::controller(JobPostsController::class)->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/{post}/apply', 'apply')->name('apply');
            });
        });

        Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
            Route::controller(TutorProfileController::class)->group(function () {
                Route::get('/{tutor}/edit', 'edit')->name('edit');
                Route::patch('/{tutor}', 'update')->name('update');
            });
        });
    });
});

Route::middleware(['auth', 'role:student'])->group(function () {
    Route::group(['prefix' => 'student', 'as' => 'student.'], function () {
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/dashboard', 'studentDashboard')->name('student-dashboard');
        });

        Route::group(['prefix' => 'posts-management', 'as' => 'posts-management.'], function () {
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
            Route::controller(StudentProfileController::class)->group(function () {
                Route::get('/{student}/edit', 'edit')->name('edit');
                Route::patch('/{student}', 'update')->name('update');
            });
        });

//        Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
//            Route::controller(ProfileController::class)->group(function () {
//                Route::get('/', 'edit')->name('edit');
//                Route::patch('/', 'update')->name('update');
//                Route::delete('/', 'destroy')->name('destroy');
//            });
//        });
    });
});

require __DIR__ . '/auth.php';
