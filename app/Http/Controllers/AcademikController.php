<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AcademikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.akademi.index', [
            'educ' => Education::all(),
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.akademi.create');
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
            'excerpt' => 'required'
        ]);
        Education::create($validatedData);
        return redirect('/dashboard/akademi')->with('success', 'New Education has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Education $name)
    {
        return view('dashboard/akademi/edit', [
            'id' => $id,
            'akademi' => $name
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Education $education, $id)
    {
        $rules = [
            'name' => 'required',
            'excerpt' => 'required'
        ];
        $validatedData = $request->validate($rules);
        Education::where('id', $id)->update($validatedData);
        return redirect('/dashboard/akademi')->with('success', 'Academic has been update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education, $id)
    {
        Education::destroy($id);
        return redirect('/dashboard/akademi')->with('success', 'Academic has been delete');
    }
}
