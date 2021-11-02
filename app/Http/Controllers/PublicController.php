<?php

namespace App\Http\Controllers;

use App\Models\Accessory;
use App\Models\Active;
use App\Models\Laboratory;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $laboratories = Laboratory::all();
        return view('public.index', compact('laboratories'));
    }

    public function laboratory(Laboratory $laboratory)
    {
        return view('public.laboratory', compact('laboratory'));
    }

    public function accessories(Laboratory $laboratory)
    {
        $name = 'Accesorios';
        return view('public.items', compact('laboratory', 'name'));
    }

    public function actives(Laboratory $laboratory)
    {
        $name = 'Activos';
        return view('public.items', compact('laboratory', 'name'));
    }

    public function active(Laboratory $laboratory, Active $active)
    {
        return view('public.active', compact('laboratory', 'active'));
    }

    public function accessory(Laboratory $laboratory, Accessory $accessory)
    {
        return view('public.accessory', compact('laboratory', 'accessory'));
    }
}
