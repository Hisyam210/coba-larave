<?php

namespace App\Http\Controllers;

use App\Models\Eskul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\HttpCache\Esi;

class DashboardEskulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.eskul.index', [
            'eskul' => Eskul::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.eskul.create');
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
            'image' => 'image|file|'
        ]);
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        Eskul::create($validatedData);
        return redirect('/dashboard/eskul');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Eskul  $eskul
     * @return \Illuminate\Http\Response
     */
    public function show(Eskul $eskul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Eskul  $eskul
     * @return \Illuminate\Http\Response
     */
    public function edit(Eskul $eskul)
    {
        return view('dashboard.eskul.edit', [
            'eskul' => $eskul,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Eskul  $eskul
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eskul $eskul)
    {
        $rules = [
            'title' => 'required',
            'image' => 'image|file|'
        ];
        $validatedData = $request->validate($rules);
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        Eskul::where('id', $eskul->id)->update($validatedData);
        return redirect('/dashboard/eskul')->with('success', 'eskul has been update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eskul  $eskul
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eskul $eskul)
    {
        if ($eskul->image) {
            Storage::delete($eskul->image);
        }
        Eskul::destroy($eskul->id);
        return redirect('/dashboard/eskul');
    }
}
