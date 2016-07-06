<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('signup', function(){
    return View::make('signup');
});

Route::get('login', function(){
    return View::make('login');
});

Route::post('add_usr', function(){
    
    $usr_name = Input::get('usr_name');
    $pswd = Input::get('pswd');
    $hshd_pswd = Hash::make($pswd);
    
    if (DB::table('table1')->where('username', $usr_name)->first() != NULL){
        return "User Name already taken!";
    }
    
    DB::table('table1')->insert(array('username'=>$usr_name, 'password'=>$hshd_pswd));
    return "User Added";
});

Route::get('logout', function(){
    return View::make('logout');
});