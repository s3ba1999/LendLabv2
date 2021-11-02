<?php

namespace App\Http\Controllers;

use App\Models\Requierement;
use App\Models\RequierementDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PharIo\Manifest\Requirement;
use Reflector;

class RequierementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requierements = Requierement::all();
        return view('admin.requirement.index', compact('requierements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->session()->get('cart') != null){
            $requierement = new Requierement();
            $requierement->recibe = Auth::user()->name . ' ' . Auth::user()->last_name;
            $requierement->state = "pedido";
            $requierement->save();
            $cart = $request->session()->get('cart');
            foreach ($cart as $key => $item) {
                // dd($sale);
                $detail = new RequierementDetail();
                $detail->request = $item['amount'];
                $detail->item_id = $item['item_id'];
                $detail->requirement_id = $requierement->id;
                $detail->save();
            }
            $request->session()->forget('cart');
        }
        return redirect(route('public.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Requierement  $requierement
     * @return \Illuminate\Http\Response
     */
    public function show(Requierement $requierement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Requierement  $requierement
     * @return \Illuminate\Http\Response
     */
    public function edit(Requierement $requierement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Requierement  $requierement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Requierement $requierement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Requierement  $requierement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Requierement $requierement)
    {
        //
    }
}
