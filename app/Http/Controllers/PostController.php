<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

/**
 * Class post controller.
 */
class PostController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Post $post) {
    return view('post.index', [
      'posts' => $post::all(),
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create() {
    return view('post.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   *
   * @return \Illuminate\Http\Response
   */
  public function store(Post $post, Request $request) {
    $post::create($request->validate([
      'title' => ['required'],
      'slug' => ['required', 'unique:App\Post,slug'],
      'body' => ['required'],
    ]));

    return redirect(route('post.index'));
  }

  /**
   * Display the specified resource.
   *
   * @param \App\Post $post
   *
   * @return \Illuminate\Http\Response
   */
  public function show(Post $post) {
    return view('post.show', [
      'post' => $post,
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param \App\Post $post
   *
   * @return \Illuminate\Http\Response
   */
  public function edit(Post $post) {
    return view('post.edit', [
      'post' => $post,
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Post $post, Request $request) {
    $post->update($request->validate([
      'title' => ['required'],
      'slug' => ['required'],
      'body' => ['required'],
    ]));
    return redirect(route('post.index'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param \App\Post $post
   *
   * @return \Illuminate\Http\Response
   */
  public function destroy(Post $post) {
    
  }

}
