<?php

namespace App\Http\Controllers;

use App\Models\Docent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DocentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docents = Docent::all();
        return view('admin.doncent.index', compact('docents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.doncent.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $docent = Docent::create($request->all());
        $docent->user()->create(['password' => Hash::make($request->password)] + $request->all());
        return redirect(route('docent.index'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Docent  $docent
     * @return \Illuminate\Http\Response
     */
    public function edit(Docent $docent)
    {
        return view('admin.doncent.edit', compact('docent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Docent  $docent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Docent $docent)
    {
        $docent->update($request->all());
        $docent->user->update($request->all());
        return redirect(route('docent.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Docent  $docent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Docent $docent)
    {
        $docent->user->delete();
        $docent->delete();
        return redirect(route('docent.index'));
    }
}
