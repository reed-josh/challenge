<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories\Interfaces\PostRepositoryInterface;

class PostsController extends Controller
{
    /*
    * @var App\Repositories\PostRepository
    */
    protected $post;

    public function __construct(PostRepositoryInterface $postRepo)
    {
        $this->post = $postRepo;
    }

    public function index()
    {
        $posts = $this->post->getAll();
        return view('welcome', compact('posts'));
    }
}
