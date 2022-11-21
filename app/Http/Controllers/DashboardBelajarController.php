<?php

namespace App\Http\Controllers;

use App\Models\Belajar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardBelajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.belajar.index', [
            'belajar' => Belajar::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.belajar.create');
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
            'slug' => 'required',
            'image' => 'image|file|',

        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        Belajar::create($validatedData);
        return redirect('/dashboard/belajar')->with('success', 'New has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Belajar  $belajar
     * @return \Illuminate\Http\Response
     */
    public function show(Belajar $belajar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Belajar  $belajar
     * @return \Illuminate\Http\Response
     */
    public function edit(Belajar $belajar)
    {
        return view('dashboard/belajar/edit', [
            "belajar" => $belajar,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Belajar  $belajar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Belajar $belajar)
    {
        $rules = [
            'slug' => 'required',
            'image' => 'image|file|'
        ];
        $validatedData = $request->validate($rules);
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        Belajar::where('id', $belajar->id)->update($validatedData);
        return redirect('/dashboard/belajar')->with('success', 'Fasilitas has been update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Belajar  $belajar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Belajar $belajar)
    {
        if ($belajar->image) {
            Storage::delete($belajar->image);
        }
        Belajar::destroy($belajar->id);
        return redirect('/dashboard/belajar')->with('success', 'Galery has been delete');
    }
}
