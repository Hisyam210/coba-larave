<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Galery;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }
        $title = '';
        if (request('user')) {
            $user = User::firstWhere('id', request('user'));
            $title = ' By ' . $user->name;
        }

        return view('page', [
            "title" => "All Post" . $title,
            "active" => 'pages',
            "blog" => Post::latest()->filter(request(['search', 'category', 'user']))->paginate(4)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('paud/news', [
            "title" => "Single Post",
            "active" => 'pages',
            "post" => $post,
            "galery" => Galery::all()
        ]);
    }
}
