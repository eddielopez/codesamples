<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}


    public static function getTemps()
    {

       // Create a array of allowed types.
        $types = array('dental hygienist', 'dentist', 'dental assistance');

        // Get what type the user selected.
        $type = Input::get('temptype');

        //Get user location
        //$location = Input::get('zipcode');


        // Make sure it is a valid type.
        if(!in_array($type, $types))
        {
            return App::abort(500, "Invaild temptype.");
        }

      $temps =  DB::table('users')
            ->join('availability', 'users.id', '=', 'availability.userid')
            ->select('users.id', 'users.firstname', 'users.lastname', 'users.zipcode', 'users.salary', 'availability.dateavailable')
            ->where('usertype', $type)
           //->where('zipcode', $location)
            ->get();

        return $temps;
    }

    public function show($id)
    {
        //
    }



}