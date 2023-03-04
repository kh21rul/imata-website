<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'title' => 'Beranda',
            'posts' => Post::latest()->where('user_id', auth()->user()->id)->paginate(5),
            'totalPosts' => Post::where('user_id', auth()->user()->id)->count(),
            'products' => Product::all(),
        ]);
    }
}
