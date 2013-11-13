<?php
class UserController extends BaseController {
	public function UserController(){
	}
	public function getIndex(){
		$users = User::all();
		return View::make('users/list')->with('users',$users);
	}
}