<?php

namespace App\Http\Controllers;

use App\Models\Active;
use App\Models\Laboratory;
use Illuminate\Http\Request;

class ActiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actives =  Active::all();
        return view('admin.active.index', compact('actives'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $labs = Laboratory::all();
        return view('admin.active.create', compact('labs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $active = Active::create($request->all());
        $active->item()->create($request->all());
        return redirect(route('active.index'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Active  $active
     * @return \Illuminate\Http\Response
     */
    public function edit(Active $active)
    {
        return view('admin.active.edit', compact('active'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Active  $active
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Active $active)
    {
        $active->update($request->all());
        $active->item->update($request->all());
        return redirect(route('active.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Active  $active
     * @return \Illuminate\Http\Response
     */
    public function destroy(Active $active)
    {
        $active->user->delete();
        $active->delete();
        return redirect(route('active.index'));
    }
}
