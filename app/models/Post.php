<?php

class Post extends Eloquent {
	protected $fillable = array('post_title','post_body');
	public function User(){
		return $this->belongsTo('user');
	}
}