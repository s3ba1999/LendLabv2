@extends('layouts.public')

@section('content')
    <div class="container-fluid">
        <h3 class="text-dark mb-1">{{$name}} de {{$laboratory->name}}</h3>
        <div class="card-group">
            @foreach ($laboratory->items as $item)
                <div class="card" style="transform: scale(0.90);"><img class="card-img-top w-100 d-block" src="/assets/img/601-6015011_arduino-uno-png.png" style="transform: scale(0.85);">
                    <div class="card-body" style="width: 150;">
                        <h4 class="card-title">{{$item->name}}</h4>
                        @if ($name == 'Accesorios')
                        <p class="card-text">{{$item->description}}</p><a class="btn btn-primary" role="button" style="background: #1c478b;" href="{{route('public.accessory', [$laboratory->id, $item->itemable->id])}}">Ver</a>

                        @else
                        <p class="card-text">{{$item->description}}</p><a class="btn btn-primary" role="button" style="background: #1c478b;" href="{{route('public.active', [$laboratory->id, $item->itemable->id])}}">Ver</a>

                        @endif
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
