<?php

namespace App\Http\Controllers;

use App\Models\Accessory;
use App\Models\Laboratory;
use Illuminate\Http\Request;

class AccessoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accessories =  Accessory::all();
        return view('admin.accesory.index', compact('accessories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $labs = Laboratory::all();
        return view('admin.accesory.create', compact('labs'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $accessory = Accessory::create($request->all());
        $accessory->item()->create($request->all());
        return redirect(route('accessory.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Accessory  $accessory
     * @return \Illuminate\Http\Response
     */
    public function edit(Accessory $accessory)
    {
        return view('admin.accesory.edit', compact('accessory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Accessory  $accessory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accessory $accessory)
    {
        $accessory->update($request->all());
        $accessory->item->update($request->all());
        return redirect(route('accessory.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Accessory  $accessory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accessory $accessory)
    {
        $accessory->user->delete();
        $accessory->delete();
        return redirect(route('accessory.index'));
    }
}
