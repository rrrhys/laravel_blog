<?php
class UserController extends BaseController {
	public function UserController(){
	}
	public function getIndex(){
		$users = User::all();
		return View::make('users/list', $this->base_data())->with('users',$users);
	}
	public function create(){
		return View::make('users/create', $this->base_data());
	}
	public function store(){
		$disable_outside_registrations = true;

		$email =Input::get('email');
		if($disable_outside_registrations && $email != "rrrhys@gmail.com"){
			return Redirect::to('/')->with('error','Registrations are disabled.');
		}
		$user_exists = User::where('email', '=', $email)->count > 0;
		$user = new User;
		$user->email = Input::get('email');
		$user->password = Hash::make(Input::get('password'));
		$user->save();

		Auth::loginUsingId($user->id);
		return Redirect::to("/")->with('success','Account created successfully!');
	}
}
