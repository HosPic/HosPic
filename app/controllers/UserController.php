<?php

class UserController extends BaseController {

	public function getLogin() {
		return View::make('pages.login');
	}

	public function postLogin() {
		$rules = array(
		    'email'    => 'required|email',
		    'password' => 'required'
		);
		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails()) {
		    return Redirect::route('getLogin')
		        ->withErrors($validator)
		        ->withInput(Input::except('password'));
		} else {
		    if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))) {
		    	return Redirect::to('/');
		    } else {
		        Session::flash('message', 'Onjuiste gegevens. Probeer het opnieuw');
		        return Redirect::route('getLogin')->withInput(Input::except('password'));
		    }
		}
	}

	public function getLogout() {
		Auth::logout();
		return Redirect::route('getLogin');
	}
}
