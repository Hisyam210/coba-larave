<?php

namespace App\Http\Controllers;

use App\Models\Kelass;
use Illuminate\Http\Request;

class DashboardKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kelas.index', [
            'kelas' => Kelass::all()
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
     * @param  \App\Models\Kelass  $kelass
     * @return \Illuminate\Http\Response
     */
    public function show(Kelass $kelass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelass  $kelass
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelass $kelass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelass  $kelass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelass $kelass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelass  $kelass
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelass $kelass, $id)
    {
        Kelass::destroy($id);
        return redirect('dashboard/kelas');
    }
}
