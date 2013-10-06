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


/*====================================================[ GENERAL PAGE ROUTES ]==============================================*/

Route::get('/','HomeController@index');
Route::get('about', 'HomeController@about');
Route::get('help', 'HomeController@help');





/*====================================================[ USER ROUTES ]==============================================*/


Route::resource('user', 'UserController');

Route::get('user', 'UserController@index');
Route::get('user/new', 'UserController@create');
Route::get('user/profile/{id}', 'UserController@show');




/*====================================================[ SEARCH ROUTES ]==============================================*/

//Route::get('search', 'SearchController@index');


Route::post('search', function(){

    $data['title'] = "Temp Search Results";
    $data['pageid'] = "tempsearch";

    $temp = User::getTemps();
    return View::make('search.temp', $data)
        ->with('temp',$temp);
});


