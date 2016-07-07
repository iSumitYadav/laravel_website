<?php

Route::get('/', function(){
	return View::make('hello');
});

Route::post('goto_signup', function(){
    return View::make('signup');
});

Route::post('goto_login', function(){
    return View::make('login');
});

Route::post('login', function(){
    return View::make('login');
});

Route::post('loggedIn', function(){
    $usr_name = Input::get('usr_name');
    return View::make('loggedIn')->with('usr_name', $usr_name);
});

Route::post('signup', function(){
    return View::make('signup');
});

Route::post('add_usr', function(){
    
    $usr_name = Input::get('usr_name');
    $pswd = Input::get('pswd');
    $hshd_pswd = Hash::make($pswd);
    
    if (DB::table('table1')->where('username', $usr_name)->first() != NULL){
        $var = "User Name already taken!";
        echo View::make('usr_added')->with('msg', $var);
        return View::make('signup');
        //{{HTML::script('js/script.js')}}
    }
    
    DB::table('table1')->insert(array('username'=>$usr_name, 'password'=>$hshd_pswd));
    
    echo View::make('usr_added');
    return View::make('signup');
});

Route::get('logout', function(){
    return View::make('logout');
});

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