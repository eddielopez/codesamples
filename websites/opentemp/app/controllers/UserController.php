<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//


        return View::make('user/profile.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//

        return View::make('user.new');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//create new user

        $input = Input::json();

        User::create(array(
           'usertype' => $input->usertype,
           'firstname' => $input->firstname,
           'lastname' => $input->lastname,
           'salary' => $input->salary,
           'zipcode' => $input->zipcode,
           'username' => $input->username,
           'email' => $input->email,
           'password' => $input->password
        ));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
        $data['title'] = 'OpenTemps Profile';
        $data['pageid'] = 'temp_profile';
        $user = User::find($id);
        return View::make('user.profile.index', $data)->with('user', $user);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
        $user = User::find($id);

        $Input = Input::json();

        $user->usertype->$Input->usertype;
        $user->firstname->$Input->firstname;
        $user->lastname->$Input->lastname;
        $user->salary->$Input->salary;
        $user->zipcode->$Input->zipcode;
        $user->email->$Input->email;
        $user->password->$Input->password;

        //save user
        $user->save();


	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//

        return User::find($id)->delete();
	}





}