<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class DashboardDivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.divisions.index', [
            'title' => 'Divisions',
            'divisions' => Division::orderByRaw('CAST(sort AS UNSIGNED)')->paginate(10)
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
            'title' => 'required|max:255|unique:divisions',
            'sort' => 'required|numeric|unique:divisions',
        ], [
            'title.required' => 'Nama divisi harus diisi!',
            'title.max' => 'Nama divisi tidak boleh lebih dari 255 karakter!',
            'title.unique' => 'Nama divisi sudah ada!',
            'sort.required' => 'Urutan divisi harus diisi!',
            'sort.numeric' => 'Urutan divisi harus berupa angka!',
            'sort.unique' => 'Urutan divisi sudah ada!',
        ]);

        $validatedData['slug'] = Str::slug($validatedData['title']);

        Division::create($validatedData);

        return redirect()->route('divisions.index')->with('success', 'ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function show(Division $division)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function edit(Division $division)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Division $division)
    {
        // Aturan validasi default
        $rules = [
            'title' => 'required|max:255',
            'sort' => 'required|numeric',
        ];

        // Tambahkan aturan unique jika ada perubahan
        if ($request->input('title') != $division->title) {
            $rules['title'] .= '|unique:divisions';
        }
        if ($request->input('sort') != $division->sort) {
            $rules['sort'] .= '|unique:divisions';
        }

        // Validasi data dengan aturan yang telah ditentukan
        $validatedData = $request->validate($rules, [
            'title.required' => 'Nama divisi harus diisi.',
            'title.max' => 'Nama divisi tidak boleh lebih dari 255 karakter.',
            'title.unique' => 'Nama divisi sudah ada.',
            'sort.required' => 'Urutan divisi harus diisi.',
            'sort.numeric' => 'Urutan divisi harus berupa angka.',
            'sort.unique' => 'Urutan divisi sudah ada.',
        ]);

        $validatedData['slug'] = Str::slug($validatedData['title']);

        Division::whereId($division->id)->update($validatedData);

        return redirect()->route('divisions.index')->with('success', 'diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function destroy(Division $division)
    {
        Division::destroy($division->id);
        return redirect()->route('divisions.index')->with('success', 'dihapus!');
    }
}
