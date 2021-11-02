@extends('layouts.public')

@section('content')
    <form class="container-fluid" action="{{route('public.cart.add')}}" method="POST">
        <h3 class="text-dark mb-4" style="font-weight: bold;">{{$laboratory->name}}</h3><label class="form-label" for="email" style="color: #1c478b;border-color: #1c478b;font-size: 20PX;"><strong>{{$accessory->item->name}}</strong><br></label>
        <div class="row mb-3">
            <div class="col-lg-4">
                <div class="card mb-3">
                    <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4" src="/assets/img/dogs/601-6015011_arduino-uno-png.png" width="160" height="160">
                        <div class="mb-3"></div><label class="form-label" for="email" style="color: #010c1e;border-color: #1c478b;"><strong>{{$accessory->amount}} Unidades Disponibles</strong><br></label>
                        <div class="mb-3"></div>
                        <div >
                            @csrf
                            <div class="row">
                                <input type="hidden" value="{{$accessory->item->id}}" name="item_id">
                                {{-- <div class="col"><button class="btn btn-primary btn-sm" type="submit" style="text-align: center;background: #1c478b;">-</button></div> --}}
                                <div class="col"><input type="number" name="quanty" class="col-form-label" value="1" min="1" max="{{$accessory->amount}}" style="color: rgb(0,0,0);"></div>
                                {{-- <div class="col"><button class="btn btn-primary btn-sm" type="submit" style="text-align: center;background: #1c478b;">+</button></div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col">
                        <div class="card shadow mb-3">
                            <div class="card-header py-3">
                                <div>
                                    <div class="row">
                                        <div class="col"><label class="col-form-label" for="email" style="color: #1c478b;border-color: #1c478b;"><strong>Descripción</strong><br></label></div>
                                        <div class="col"><label class="col-form-label" for="email" style="color: rgb(0,0,0);"><strong>Características</strong></label></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="email" style="color: rgb(0,0,0);"><strong>{{$accessory->item->name}}</strong></label>
                                                <p>{{$accessory->item->description}}<br></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3" style="text-align: center;"><button class="btn btn-primary btn-sm" type="submit" style="text-align: center;background: #1c478b;">Agregar al Carrito</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow"></div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
