<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Interfaces\PostRepositoryInterface;
use App\Post;
 /**
  *
  */
 class PostRepository implements PostRepositoryInterface
 {

     function getAll()
     {
         return Post::all();
     }
 }
