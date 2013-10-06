<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{

        $data['title'] = "home";
        $data['pageid'] = "home";
        return View::make('home.index', $data);
	}

    public  function about()
    {

        return View::make('home.about');
    }
    public  function help()
    {
        return View::make('home.help');
    }

}