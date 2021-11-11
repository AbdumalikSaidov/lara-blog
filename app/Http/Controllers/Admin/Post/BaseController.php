<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Tag;
use App\Service\PostService;

class BaseController extends Controller
{
    public $service;

    public function __construct(PostService $service) {
        $this->service = $service;
    }
}
