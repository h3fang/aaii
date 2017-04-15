<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Page;
use App\Member;

class PageController extends Controller
{
    public function home()
    {
        $pages = Page::orderBy('order', 'asc')->get();
        return view('page.home')->withPages($pages);
    }
    
    public function members()
    {
        $members = Member::orderBy('order', 'asc')->get();
        return view('page.members')->withMembers($members);
    }
    
    public function download()
    {
        return view('page.download');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::orderBy('order', 'asc')->paginate(5);
        return view('page.index')->withPages($pages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array('title' => 'required|max:255', 'content' => 'required'));
        $page = new Page;
        $page->title = $request->title;
        $page->slug = str_slug($request->title);
        $page->content = $request->content;
        $page->order = DB::table('pages')->count() + 1;
        $page->created_by = Auth::guest() ? 0 : Auth::user()->id;
        $page->save();
        
        Session::flash('success', 'This page was successfully saved.');
        
        return redirect()->route('page.show', $page->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page = Page::where('slug', $id)->firstOrFail();
        return view('page.show')->withPage($page);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::where('slug', $id)->firstOrFail();
        return view('page.edit')->withPage($page);
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
        $this->validate($request, array('title' => 'required|max:255', 'content' => 'required'));
        $page = Page::where('slug', $id)->firstOrFail();
        $page->title = $request->title;
        $page->content = $request->content;
        $page->save();
        
        Session::flash('success', 'This page was successfully edited.');
        return redirect()->route('page.show', $page->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Page::where('slug', $id)->firstOrFail();
        $page->destroy();
        return redirect()->route('page.index');
    }
}
