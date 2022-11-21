<?php

namespace App\Http\Controllers;

use App\Models\Pilar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PillarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pilar.index', [
            'pilar' => Pilar::all()
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
     * @param  \App\Models\Pilar  $pilar
     * @return \Illuminate\Http\Response
     */
    public function show(Pilar $pilar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pilar  $pilar
     * @return \Illuminate\Http\Response
     */
    public function edit(Pilar $pilar)
    {
        return view('dashboard.pilar.edit', [
            'pilar' => $pilar
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pilar  $pilar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pilar $pilar)
    {
        $rules = [
            'pilar' => 'required|max:225',
            'content' => 'required',
            'image' => 'image|file|'
        ];
        $validatedData = $request->validate($rules);
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        Pilar::where('id', $pilar->id)->update($validatedData);
        return redirect('/dashboard/pilar')->with('success', 'Pilar has been update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pilar  $pilar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pilar $pilar)
    {
        Pilar::destroy($pilar->id);
        return redirect('/dashboard/pilar');
    }
}
