<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $shareComponent = \Share::page(
            'https://www.khayrulshanto.me',
            'Khayrul Shanto',
            [
                'class' => 'btn btn-primary m-1',
                'id' => 'share-btn',
            ],
        )
            ->facebook()
            ->twitter()
            ->linkedin()
            ->whatsapp();

        return view('welcome', compact('shareComponent', 'posts'));
    }
}
