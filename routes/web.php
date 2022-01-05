<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;



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
});

//Static Route
Route::get('/test',function(){
    return "Testing Static Route";
});

Route::get('/test/detail',function(){
    return "Testing Static Route Details";
});

//Dynamic Route
route::get('/dynamic/{name}',function($name){
    return "Dyanmic Route $name";
});

//Naming Route
route::get('/route/name',function(){
    return "Naming Route.";
})->name('RoutingName');

//redirect Route
route::get('/callingRoute',function(){
    return redirect()->route('RoutingName');
});

//Defining Routing from calling method which has Controller

//Route::get('/controllerR',[TestController::class,'begin']);

Route::get('/articles',[TestController::class,'start']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
