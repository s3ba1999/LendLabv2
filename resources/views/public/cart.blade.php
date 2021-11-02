@extends('layouts.public')

@section('content')
<div class="container-fluid">
    <h3 class="text-dark mb-4" style="font-weight: bold;">Carrito de préstamos</h3><label class="form-label" for="email" style="color: #1c478b;border-color: #1c478b;font-size: 20PX;"><strong>Laboratorio de Electrónica</strong><br></label>
    @if (\Session::get('cart') != null)


    <div>
        @foreach (\Session::get('cart') as $option)
            <div class="row">
                <div class="col-7 col-sm-6"><img class="img-thumbnail img-fluid mb-3 mt-4" src="assets/img/dogs/ulstradonido.png" width="150" height="150" style="transform: scale(1);"></div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col"><label class="form-label" for="email" style="color: rgb(0,0,0);text-align: center;"><strong>{{  $option['item_name'] }}</strong></label>
                                    <div></div><label class="form-label" for="email" style="color: #010c1e;border-color: #1c478b;font-weight: bold;"><strong>{{  $option['item_name'] }}</strong><br></label>
                                    <div></div>
                                </div>
                            </div>
                            <form>
                                <div class="row">
                                    <div class="col"><label class="col-form-label" for="email" style="color: rgb(0,0,0);"><strong>{{  $option['amount'] }}</strong></label></div>
                                </div>
                            </form>
                        </div>

                        <div class="col-11 offset-4 offset-lg-11"><a href="{{ route('public.cart.remv', $option['item_id']) }}" onclick="event.preventDefault(); document.getElementById('del-form-{{$option['item_id']}}').submit();" ><i class="far fa-trash-alt fa-fw" style="text-align: right;"></i></a></div>
                    </div>
                </div>
            </div><form id="del-form-{{$option['item_id']}}" class="d-none" action="{{route('public.cart.remv', $option['item_id'])}}" method="POST">@csrf @method('DELETE')</form>
        @endforeach
            <form action="{{route('public.newRequirement')}}" method="POST">@csrf<button type="submit"> Solicitar</button></form>
        </div>

    @else
        <p>No hay datos</p>
    @endif
</div>
@endsection
