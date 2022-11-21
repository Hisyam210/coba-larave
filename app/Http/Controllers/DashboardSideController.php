<?php

namespace App\Http\Controllers;

use App\Models\Side;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardSideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.side.index', [
            'home' => Side::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.side.create');
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
            'image' => 'file'
        ]);
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        Side::create($validatedData);
        return redirect('/dashboard/side');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Side  $side
     * @return \Illuminate\Http\Response
     */
    public function show(Side $side)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Side  $side
     * @return \Illuminate\Http\Response
     */
    public function edit(Side $side)
    {
        return view('dashboard.side.edit', [
            'home' => $side,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Side  $side
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Side $side)
    {
        $rules = [
            'title' => 'required',
            'image' => 'file'
        ];
        $validatedData = $request->validate($rules);
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        Side::where('id', $side->id)->update($validatedData);
        return redirect('/dashboard/side')->with('success', 'sidebar has been update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Side  $side
     * @return \Illuminate\Http\Response
     */
    public function destroy(Side $side)
    {
        if ($side->image) {
            Storage::delete($side->image);
        }
        Side::destroy($side->id);
        return redirect('/dashboard/side');
    }
}
