<?php

namespace App\Http\Controllers;

use App\Models\Cllass;
use App\Models\Program;
use Illuminate\Http\Request;
use PhpParser\Builder\Class_;
use PhpParser\Node\Stmt\Return_;

class DashboardCllassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.cllass.index', [
            'class' => Cllass::all(),
            'cllass' => Cllass::with('programs')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.cllass.create');
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
            'class' => 'required|unique:cllasses',
            'slug' => 'required',

        ]);
        Cllass::create($validatedData);
        return redirect('/dashboard/cllass')->with('success', 'New has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cllass  $cllass
     * @return \Illuminate\Http\Response
     */
    public function show(Cllass $cllass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cllass  $cllass
     * @return \Illuminate\Http\Response
     */
    public function edit(Cllass $cllass)
    {
        return view('dashboard/cllass/edit', [
            'class' => $cllass,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cllass  $cllass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cllass $cllass)
    {
        $rules = [
            'class' => 'required|unique:cllasses',
            'slug' => 'required',
        ];
        $validatedData = $request->validate($rules);
        Cllass::where('id', $cllass->id)->update($validatedData);
        return redirect('/dashboard/cllass')->with('success', 'Has been update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cllass  $cllass
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cllass $cllass)
    {
        Cllass::destroy($cllass->id);
        return redirect('dashboard/cllass');
    }
}
