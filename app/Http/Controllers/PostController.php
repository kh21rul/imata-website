<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use App\Models\Comment;
use stdClass;

class PostController extends Controller
{
    public $meta;

    public function __construct()
    {
        $this->meta = new stdClass();
        $this->meta->keywords = 'berita imata lhokseumawe - aceh utara, artikel imata lhokseumawe - aceh utara, imata lhokseumawe - aceh utara, imata, tamiang, mahasiswa tamiang';
        $this->meta->author = 'INFOKOM IMATA';
        $this->meta->description = 'Berita dan artikel mengenai Ikatan Mahasiswa Aceh Tamiang, Lhokseumawe - Aceh Utara';
        $this->meta->url = 'https://imata.web.id/blog';
        $this->meta->type = 'blog';
        $this->meta->image = 'https://imata.web.id/img/logo.png';
    }

    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstwhere('slug', request('category'));
            $title = ' mengenai ' . $category->name;
            $this->meta->keywords = $category->name . ', ' . $this->meta->keywords;
            $this->meta->description = 'Berita dan artikel mengenai ' . $category->name . ' di Ikatan Mahasiswa Aceh Tamiang, Lhokseumawe - Aceh Utara';
            $this->meta->url = 'https://imata.web.id/blog?category=' . $category->slug;
        }

        if (request('tag')) {
            $tag = Tag::firstwhere('slug', request('tag'));
            $title = ' dengan tag ' . $tag->name;
            $this->meta->keywords = $tag->name . ', ' . $this->meta->keywords;
            $this->meta->description = 'Berita dan artikel dengan tag ' . $tag->name . ' di Ikatan Mahasiswa Aceh Tamiang, Lhokseumawe - Aceh Utara';
            $this->meta->url = 'https://imata.web.id/blog?tag=' . $tag->slug;
        }

        if (request('author')) {
            $author = User::firstwhere('username', request('author'));
            $title = ' dari ' . $author->name;
            $this->meta->keywords = $author->name . ', ' . $this->meta->keywords;
            $this->meta->description = 'Berita dan artikel dari ' . $author->name . ' di Ikatan Mahasiswa Aceh Tamiang, Lhokseumawe - Aceh Utara';
            $this->meta->url = 'https://imata.web.id/blog?author=' . $author->username;
        }

        return view('posts', [
            'title' => 'Semua Berita' . $title,
            'meta' => $this->meta,
            'posts' => Post::latest()->filter(request(['search', 'category', 'tag', 'author']))->paginate(4)
                ->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        if ($post->tags()->count() > 0) {
            $tags = $post->tags()->get();
            $tags = $tags->pluck('name')->toArray();
            $tags = implode(', ', $tags);
            $this->meta->keywords = $tags;
        }

        $this->meta->author = $post->author->username;
        $this->meta->description = $post->excerpt;
        $this->meta->url = 'https://imata.web.id/blog/' . $post->slug;
        $this->meta->type = 'article';
        $this->meta->image = 'https://imata.web.id/storage/' . $post->image;


        return view('post', [
            'title' => $post->title,
            'meta' => $this->meta,
            'post' => $post,
        ]);
    }

    public function storeComment(Request $request, Post $post)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'body' => 'required|max:255'
        ]);

        Comment::create([
            'name' => $request->name,
            'email' => $request->email,
            'body' => $request->body,
            'post_id' => $post->id
        ]);

        return back();
    }
}
