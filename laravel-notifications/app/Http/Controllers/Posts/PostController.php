<?php

namespace App\Http\Controllers\Posts;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

	private $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function index()
    {
        $posts = $this->post->paginate();
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        # $post = $this->post->with('comments.user')->find($id);   //where('id', $id)->first();
        # -- traz o post e with e os seus comentarios e o utilizador vinculado ao comentario numa unicaconsulta.
        $post = $this->post->with(['comments.user', 'user'])->find($id); 
        # -- traz o post e with e os seus comentarios e o utilizador vinculado ao comentario e tambem o autor do post numa unicaconsulta.
        //dd($post->comments);
        return view('posts.show', compact('post'));
    
    }
}
