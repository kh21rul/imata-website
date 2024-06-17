<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class AdminTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.tags.index', [
            'title' => 'Tags',
            'tags' => Tag::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:tags',
            'slug' => 'required|max:255|unique:tags',
        ]);

        Tag::create($validatedData);

        return redirect()->route('tags.index')->with('success', 'ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view('dashboard.tags.edit', [
            'title' => 'Edit Tag',
            'tag' => $tag,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:tags,name,' . $tag->id,
            'slug' => 'required|max:255|unique:tags,slug,' . $tag->id,
        ]);

        $tag->update($validatedData);

        return redirect()->route('tags.index')->with('success', 'diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        // Hapus hubungan di tabel pivot
        $tag->posts()->detach();

        $tag->delete();

        return redirect()->route('tags.index')->with('success', 'dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Tag::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
