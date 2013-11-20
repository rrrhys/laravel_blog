<?php

class PostController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		if(!Auth::check()) return Redirect::to('/');
		
		return View::make('posts.create', $this->base_data());
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		if(!Auth::check()) return Redirect::to('/');

		$post = Post::create(Input::all());
		Auth::user()->posts()->save($post);

		return Redirect::route('post.show',array($post->id))->with('success','Post <i>'.$post->post_title.'</i> saved!');
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
		$post = Post::find((int)$id);
		if(!$post){
			return Redirect::to('/')->with('error',"That post doesn't exist");
		}
		return View::make('posts.show', $this->base_data(array('post'=>$post)));
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
		if(!Auth::check()) return Redirect::to('/');

		$post = Post::find((int)$id);
		return View::make('posts.edit', $this->base_data(array('post'=>$post)));
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
		if(!Auth::check()) return Redirect::to('/');

		$post = Post::find((int)$id);
		$post->update(Input::all());

		return Redirect::route('post.show',array($post->id))->with('success','Post <i>'.$post->post_title.'</i> saved!');

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
	}

}