<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function view($Uri){

        return view('post', [
            'post' => Post::where('Uri', $Uri)->first()
        ]);
    }
}
