<?php

namespace App\Http\Controllers;

use App\Models\Contac;
use App\Models\Pesan;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class DashboardContacController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.contac.index', [
            'contac' => Contac::all(),
            'pesan' => Pesan::all()
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
     * @param  \App\Models\Contac  $contac
     * @return \Illuminate\Http\Response
     */
    public function show(Contac $contac)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contac  $contac
     * @return \Illuminate\Http\Response
     */
    public function edit(Contac $contac)
    {
        return view('dashboard.contac.edit', [
            'contac' => $contac
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contac  $contac
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contac $contac)
    {
        $rules = [
            'alamat' => 'required',
            'nomor' => 'required',
            'telpon' => 'required',
            'email' => 'required',
        ];
        $validatedData = $request->validate($rules);
        Contac::where('id', $contac->id)->update($validatedData);
        return redirect('/dashboard/contac')->with('success', 'Has been update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contac  $contac
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pesan $pesan, $id)
    {
        Pesan::destroy($id);
        return redirect('/dashboard/contac');
    }
}
