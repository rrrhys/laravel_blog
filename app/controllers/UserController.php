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
		$user = new User;
		$user->email = Input::get('email');
		$user->password = Hash::make(Input::get('password'));
		$user->save();

		Auth::loginUsingId($user->id);
		return Redirect::to("/")->with('success','Account created successfully!');
	}
}