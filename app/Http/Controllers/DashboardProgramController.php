<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Cllass;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;

class DashboardProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.program.index', [
            'program' => Program::all(),
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
        return view('dashboard.program.create', [
            'class' => Cllass::all()
        ]);
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
            'cllass_id' => 'required',
            'slug' => 'required|unique:programs',
        ]);

        Program::create($validatedData);
        return redirect('/dashboard/program')->with('success', 'New Program has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $program)
    {
        return view('dashboard.program.edit', [
            'program' => $program,
            'class' => Cllass::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $program)
    {
        $rules = [
            'title' => 'required',
            'cllass_id' => 'required',
            'slug' => 'required|unique:programs',
        ];
        $validatedData = $request->validate($rules);
        Program::where('id', $program->id)->update($validatedData);
        return redirect('/dashboard/program')->with('success', 'Program has been update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        Program::destroy($program->id);
        return redirect('dashboard/program');
    }
}
