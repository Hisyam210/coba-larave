<?php

namespace App\Http\Controllers;

use App\Models\Filosofi;
use Illuminate\Http\Request;

class DashboardFilosofiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.filosofi.index', [
            'filosofi' => Filosofi::all()
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Filosofi  $filosofi
     * @return \Illuminate\Http\Response
     */
    public function show(Filosofi $filosofi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Filosofi  $filosofi
     * @return \Illuminate\Http\Response
     */
    public function edit(Filosofi $filosofi)
    {
        return view('dashboard/filosofi/edit', [
            'filosofi' => $filosofi,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Filosofi  $filosofi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Filosofi $filosofi)
    {
        $rules = [
            'visi' => 'required',
            'misi' => 'required',
        ];
        $validatedData = $request->validate($rules);
        Filosofi::where('id', $filosofi->id)->update($validatedData);
        return redirect('/dashboard/filosofi')->with('success', 'Has been update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Filosofi  $filosofi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Filosofi $filosofi)
    {
        Filosofi::destroy($filosofi->id);
        return redirect('/dashboard/filosofi');
    }
}
