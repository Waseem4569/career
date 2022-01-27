<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PermissionGroupController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\front\MainController;
use App\Http\Controllers\Admin\DepartmentsController;
use Illuminate\Support\Facades\Route;

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

//Front Controllers
Route::group(['middleware' => ['auth','xss']], function() {
    Route::get('/home', 'HomeController@index')->name('home');
});


Route::get('login', function () {
    return redirect('login');
});
Route::group(['middleware' => ['auth','verified','IsActive','xss'],'prefix'=>'admin'], function() {
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
    Route::resource('permission_group',PermissionGroupController::class);
    Route::resource('permission',PermissionController::class);
    Route::resource('role',RoleController::class);
    Route::get('get/roles',[RoleController::class,'getRoles'])->name('getRoles');
    Route::resource('user',UserController::class);
    Route::get('get/users',[UserController::class,'getUsers'])->name('getUsers');

    //  
    Route::resource('departments',DepartmentsController::class);
    Route::get('get/departments',[DepartmentsController::class,'getdepartment'])->name('getdepartment');
    Route::delete('department-delete/{id}' ,[DepartmentsController::class,'delete'])->name('department.delete');
    Route::get('department-restore/{id}' ,[DepartmentsController::class,'restore'])->name('department.restore');

});
Route::get('/logout', function () {
    Auth::logout();
    return redirect(route('login'));
});

Route::get('/', [MainController::class,'index'])->name('index');

require __DIR__.'/auth.php';
