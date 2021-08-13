<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\Environment\Console;

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



 Route::get('/tickets','TicketController@index')->name('tickets.index');
 Route::get('/department','DepartmentController@index')->name('department.index');

 Auth::routes();

Route::get('/auth',function() {
//    if(!Auth::check()){
//     //    $user = App\User::find(1);
//        Auth::login($user);
//    }
  return Auth::user();

});


Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

