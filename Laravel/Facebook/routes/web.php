<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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


Route::group(['middleware' => ['web']] ,function() {   

    Route::group(['namespace' => '\App\Http\Controllers'], function(){



    Route::get('/', function () {
         return view('welcome');
    })->name('home');
        
        
    Route::post('/signup', [

        'uses'=>'UserController@postsignup',
        'as'=>'signup' 
    ]);


    Route::post('/signin', [

        'uses'=>'UserController@postsignin',
        'as'=>'signin' 
    ]);


    Route::get('/dashboard', [

        'uses'=>'UserController@getdashboard',
        'as'=>'dashboard',
        'middleware'=>'auth'
    ]);


    /*
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
*/


});
});


//Route::get('/login', [ussercontroller::postsignup, 'login']);


/*
Route::post('/signup', [
    'uses' => 'ussercontroller@postsignup',
    'as' => 'signup'
]);



*/
