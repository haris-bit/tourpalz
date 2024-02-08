<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\UsersController;
use App\Http\Controllers\Dashboard\RolesController;
use App\Http\Controllers\Dashboard\PermissionsController;
use App\Http\Controllers\Dashboard\ExpertisesController;
use App\Http\Controllers\Dashboard\CMS\BannerController;
use App\Http\Controllers\Dashboard\CMS\XcellAboutController;
use App\Http\Controllers\Dashboard\CMS\DoctorAboutController;
use App\Http\Controllers\Dashboard\CMS\StatsController;
use App\Http\Controllers\Dashboard\CMS\PackagesController;
use App\Http\Controllers\Dashboard\CMS\PlansController;
use App\Http\Controllers\Dashboard\CMS\SubPlansController;
use App\Http\Controllers\Dashboard\CMS\BlogsController;
use App\Http\Controllers\Dashboard\CMS\ContactController;


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

   
    /**
     * Home Routes
     */
    
    

  
  

    Route::group(['middleware' => ['auth', 'permission']], function() {

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

       
        Route::group(['prefix' => 'admin'], function() {

      

        /**
         * User Routes
         */
        
       

        Route::resource('roles', RolesController::class);
        Route::resource('permissions', PermissionsController::class);
        Route::resource('expertises', ExpertisesController::class);
        Route::resource('banner', BannerController::class);
        Route::resource('xcell_about', XcellAboutController::class);
        Route::resource('doctor_about', DoctorAboutController::class);
        Route::resource('stats', StatsController::class);
        Route::resource('packages', PackagesController::class);
        Route::resource('plans', PlansController::class);
        Route::resource('subplans', SubPlansController::class);
        Route::get('subplans/{plan}/create', [SubPlansController::class, 'create'])->name('subplans.custom.create');
        Route::resource('blogs', BlogsController::class);
        Route::resource('contact', ContactController::class);
        Route::get('/user/settings', [UsersController::class, 'settings'])->name('users.setting');
        Route::patch('/{user}/user/settings/update', [UsersController::class, 'setting_update'])->name('users.setting_update');


        Route::group(['prefix' => 'users'], function() {
            Route::get('/', [UsersController::class, 'index'])->name('users.index');
            Route::get('/create', [UsersController::class, 'create'])->name('users.create');
            Route::post('/create', [UsersController::class, 'store'])->name('users.store');
            Route::get('/{user}/show', [UsersController::class, 'show'])->name('users.show');
            Route::get('/{user}/edit', [UsersController::class, 'edit'])->name('users.edit');
            Route::patch('/{user}/update', [UsersController::class, 'update'])->name('users.update');
            Route::delete('/{user}/delete', [UsersController::class, 'destroy'])->name('users.destroy');
        });


    });
    
});
