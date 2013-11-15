<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}
	public function base_data($array = null){
		$base_data = array(
			'success'=>Session::get('success',''),
			'error'=>Session::get('error',''));

			if($array != null){
				return array_merge($base_data, $array);
			}
			return $base_data;
	}

}