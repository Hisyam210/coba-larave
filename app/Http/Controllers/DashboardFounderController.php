<?php

namespace App\Http\Controllers;

use App\Models\Founder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardFounderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.founder.index', [
            'fonder' => Founder::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.founder.create');
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
            'nama' => 'required',
            'body' => 'required',
            'image' => 'image|file|'
        ]);
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        Founder::create($validatedData);
        return redirect('/dashboard/founder')->with('success', 'New Founder has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Founder  $founder
     * @return \Illuminate\Http\Response
     */
    public function show(Founder $founder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Founder  $founder
     * @return \Illuminate\Http\Response
     */
    public function edit(Founder $founder)
    {
        return view('dashboard/founder/edit', [
            "fonder" => $founder,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Founder  $founder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Founder $founder)
    {
        $rules = [
            'nama' => 'required',
            'body' => 'required',
            'image' => 'image|file|'
        ];
        $validatedData = $request->validate($rules);
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        Founder::where('id', $founder->id)->update($validatedData);
        return redirect('/dashboard/founder')->with('success', 'Founder has been update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Founder  $founder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Founder $founder)
    {
        if ($founder->image) {
            Storage::delete($founder->image);
        }
        Founder::destroy($founder->id);
        return redirect('/dashboard/founder')->with('success', 'Founder has been delete');
    }
}
