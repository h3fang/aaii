<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Member;
use Image;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();
        return view("member.index")->withMembers($members);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("member.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'fullname' => 'required|max:255',
            'type' => 'required|in:staff,student',
            'title' => 'required|max:255',
            'email' => 'nullable|email|max:255',
            'joined_at' => 'required|date|before_or_equal:' . date('Y-m-d') . '|after_or_equal:2008-01-01',
            'photo' => 'required|image|max:1024',
            'description' => 'required')
            );
        
        $member = new Member;
        $member->fullname = $request->fullname;
        $member->type = $request->type;
        $member->title = $request->title;
        $member->email = $request->has("email") ? $request->email : "No public email available.";
        $member->joined_at = $request->joined_at;
        
        $member->order = Member::count() + 1;
        
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            
            $fileName = sha1(time() . $photo->hashName()) . '.' . $photo->getClientOriginalExtension();
            $photo->storeAs('public/image/member/', $fileName);
            $member->photo = '/storage/image/member/' . $fileName;
        }
        
        $member->description = $request->description;
        
        $member->save();
        
        return redirect()->route('member.show', $member->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
