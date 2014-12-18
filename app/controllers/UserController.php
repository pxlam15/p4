<?php

class UserController extends BaseController{

	public function __construct() {
		parent::__construct();

		$this->beforeFilter('guest',
			array(
				'only' => array('getLogin', 'getSignup')
			));
	}


	public function preSignup() {
		return View::make('sign-up');
	}

	public function preLogin() {
		return View::make('log-in');
	}

	public function postSignup() {


		/*
		$rules = array(
			'username' => 'required|username|unique:users',
			'password' => 'required|min:6'
		);
		
		$validator = Validator::make(Input::all(), $rules);
		
		if($validator->fails()) {
			return Redirect::to('/signup')
				->with('flash_message', 'Sign up failed; please fix the errors listed below.')
				->withInput()
				->withErrors($validator);
		}

		$user = new User;
		$user->username = Input::get('userName');
		$user->password = Hash::make(Input::get('password'));

		try {
			$user->save();
		}
		catch (Exception $e) {
			return Redirect::to('/signup')
			->with('flash_message', 'Sign up failed; please try again.')
			->withInput();
		}
		
		Auth::login($user);

		return Redirect::to('/home');
		*/

		return Redirect::to('/home');
}



}