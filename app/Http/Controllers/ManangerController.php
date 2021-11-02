<?php

namespace App\Http\Controllers;

use App\Models\Laboratory;
use App\Models\Mananger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ManangerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manangers = Mananger::all();
        return view('admin.mananger.index', compact('manangers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $labs = Laboratory::all();
        return view('admin.mananger.create', compact('labs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lab =  Laboratory::find($request->laboratory_id);
        $manangerAnt = $lab->mananger;
        $mananger = Mananger::create($request->all());
        $mananger->user()->create(['password' => Hash::make($request->password)] + $request->all());
        if($manangerAnt)
            $manangerAnt->delete();
        return redirect(route('mananger.index'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mananger  $mananger
     * @return \Illuminate\Http\Response
     */
    public function edit(Mananger $mananger)
    {
        $labs = Laboratory::all();
        return view('admin.mananger.edit', compact('mananger', 'labs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mananger  $mananger
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mananger $mananger)
    {
        $mananger->update($request->all());
        $mananger->user->update($request->all());
        return redirect(route('mananger.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mananger  $mananger
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mananger $mananger)
    {
        $mananger->user->delete();
        $mananger->delete();
        return redirect(route('mananger.index'));
    }
}
