<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Member;
use App\Models\Product;
use App\Models\Division;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'title' => 'Beranda',
            'posts' => Post::latest()->where('user_id', auth()->user()->id)->paginate(5),
            'totalPosts' => Post::where('user_id', auth()->user()->id)->count(),
            'totalProducts' => Product::count(),
            'totalDivisi' => Division::count(),
            'totalPengurus' => Member::count(),
        ]);
    }
}
