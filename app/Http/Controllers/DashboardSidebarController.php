<?php

namespace App\Http\Controllers;

use App\Models\Sidebar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardSidebarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.home.index', [
            'home' => Sidebar::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.home.create');
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
            'title' => 'required',
            'slug' => 'required',
            'image' => 'image|file|'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        Sidebar::create($validatedData);
        return redirect('/dashboard/home')->with('success', 'New photo has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sidebar  $sidebar
     * @return \Illuminate\Http\Response
     */
    public function show(Sidebar $sidebar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sidebar  $sidebar
     * @return \Illuminate\Http\Response
     */
    public function edit(Sidebar $sidebar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sidebar  $sidebar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sidebar $sidebar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sidebar  $sidebar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sidebar $sidebar, $id)
    {
        if ($sidebar->image) {
            Storage::delete($sidebar->image);
        }
        Sidebar::destroy($sidebar->id);
        return redirect('/dashboard/home')->with('success', 'Galery has been delete');
    }
}
