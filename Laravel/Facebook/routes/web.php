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


<<<<<<< HEAD
Route::group(['middleware' => ['web']] ,function() {
=======
Route::group(['middleware' => ['web']] ,function() {   
>>>>>>> 76d92f8a84eb00a4c52731c0f1c05dc299dd1403

    Route::group(['namespace' => '\App\Http\Controllers'], function(){


<<<<<<< HEAD
    Route::get('/', function () {
        return view('welcome');
    })->name('home');



    Route::post('/signup', [

        'uses'=>'UserController@postsignup',
        'as'=>'signup'
=======

    Route::get('/', function () {
         return view('welcome');
    })->name('home');
        
        
    Route::post('/signup', [

        'uses'=>'UserController@postsignup',
        'as'=>'signup' 
>>>>>>> 76d92f8a84eb00a4c52731c0f1c05dc299dd1403
    ]);


    Route::post('/signin', [

        'uses'=>'UserController@postsignin',
<<<<<<< HEAD
        'as'=>'signin'
=======
        'as'=>'signin' 
>>>>>>> 76d92f8a84eb00a4c52731c0f1c05dc299dd1403
    ]);


    Route::get('/dashboard', [

        'uses'=>'UserController@getdashboard',
        'as'=>'dashboard',
<<<<<<< HEAD
        'middleware' => 'authenticated'
    ]);

});
});

=======
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
>>>>>>> 76d92f8a84eb00a4c52731c0f1c05dc299dd1403
