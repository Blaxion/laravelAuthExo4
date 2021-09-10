<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Models\Role;
use App\Models\User;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    $users = User::where('role_id',2)->get();
    return view('dashboard',compact('users'));
})->middleware(['admin','auth'])->name('dashboard');




Route::resource('dashboard/role', RoleController::class)->middleware(['auth','admin']);

Route::resource('dashboard/user', UserController::class)->middleware(['auth','admin']);

require __DIR__.'/auth.php';
