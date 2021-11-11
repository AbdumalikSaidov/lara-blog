<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {
      $categoriesCount = Category::all()->count();
      $postsCount = Post::all()->count();
      $tagsCount = Tag::all()->count();
      $usersCount = User::all()->count();
      return view('admin.main.index', compact('categoriesCount', 'postsCount', 'tagsCount', 'usersCount'));
    }
}
