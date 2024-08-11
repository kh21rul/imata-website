<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Division;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request('division')) {
            $members = Member::orderByRaw('CAST(sort AS UNSIGNED)')->filter(request(['division']))->paginate(10)->withQueryString();
        } else {
            $members = Member::filter(request(['division']))->paginate(10)->withQueryString();
        }
        return view('dashboard.members.index', [
            'title' => 'Members',
            'members' => $members,
            'divisions' => Division::orderByRaw('CAST(sort AS UNSIGNED)')->get()
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
            'name' => 'required|max:255',
            'position' => 'required|max:255',
            'sort' => 'required|numeric|max:255',
            'photo' => 'image|file|max:2048',
            'division_id' => 'required|exists:divisions,id'
        ]);

        if ($request->file('photo')) {
            $validatedData['photo'] = $request->file('photo')->store('member-photos');
        }

        $member = Member::create($validatedData);

        if (request('division')) {
            return redirect('/dashboard/members?division=' . $member->division->slug)->with('success', 'ditambahkan!');
        } else {
            return redirect('/dashboard/members')->with('success', 'ditambahkan!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        $rules = ([
            'name' => 'required|max:255',
            'position' => 'required|max:255',
            'sort' => 'required|numeric|max:255',
            'photo' => 'image|file|max:2048',
            'division_id' => 'required|exists:divisions,id'
        ]);

        $validatedData = $request->validate($rules);

        if ($request->file('photo')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['photo'] = $request->file('photo')->store('member-photos');
        }

        Member::whereId($member->id)->update($validatedData);

        if (request('division')) {
            return redirect('/dashboard/members?division=' . $member->division->slug)->with('success', 'diubah!');
        } else {
            return redirect('/dashboard/members')->with('success', 'diubah!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        $slug = $member->division->slug;

        if ($member->photo) {
            Storage::delete($member->photo);
        }

        Member::destroy($member->id);

        if (request('division')) {
            return redirect('/dashboard/members?division=' . $slug)->with('success', 'dihapus!');
        } else {
            return redirect('/dashboard/members')->with('success', 'dihapus!');
        }
    }
}
