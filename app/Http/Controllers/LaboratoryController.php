<?php

namespace App\Http\Controllers;

use App\Models\Laboratory;
use Illuminate\Http\Request;

class LaboratoryController extends Controller
{
    public function index()
    {
        $laboratories = Laboratory::all();
        return view('admin.laboratory.index', compact('laboratories'));
    }

    public function create()
    {
        return view('admin.laboratory.create');

    }

    public function store(Request $request)
    {
        $lab = Laboratory::create($request->all());
        if($request->hasFile("imagen"))
            $lab->update(ImageController::uploadImage($request, 'Imagen del laboratorio', 'lab'));
        return redirect(route('laboratory.index'));
    }

    public function edit(Laboratory $laboratory)
    {
        return view('admin.laboratory.edit', compact('laboratory'));
    }

    public function update(Request $request, Laboratory $laboratory)
    {
        $laboratory->update($request->all());
        return redirect(route('laboratory.index'));
    }

    public function destroy(Laboratory $laboratory)
    {
        $laboratory->delete();
        return redirect(route('laboratory.index'));
    }
}
