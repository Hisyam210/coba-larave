<?php

namespace App\Http\Controllers;

use App\Models\Bismillah;
use Illuminate\Http\Request;

class DashboardBismillahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.bismillah.index', [
            'bisa' => Bismillah::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.bismillah.create');
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
            'name' => 'required',
            'slug' => 'required',

        ]);

        Bismillah::create($validatedData);
        return redirect('/dashboard/bismillah')->with('success', 'New has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bismillah  $bismillah
     * @return \Illuminate\Http\Response
     */
    public function show(Bismillah $bismillah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bismillah  $bismillah
     * @return \Illuminate\Http\Response
     */
    public function edit(Bismillah $bismillah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bismillah  $bismillah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bismillah $bismillah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bismillah  $bismillah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bismillah $bismillah)
    {
        Bismillah::destroy($bismillah->id);
        return redirect('dashboard/bismillah');
    }
}
