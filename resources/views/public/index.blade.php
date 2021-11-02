@extends('layouts.public')

@section('content')
<div class="container-fluid">
    <h3 class="text-dark mb-4" style="font-weight: bold;">Laboratorios</h3>
    <div class="row mb-3">
        @foreach ($laboratories as $laboratory)
            <div class="col-lg-4">
                <div class="card mb-3">
                    <div class="card-body text-center shadow"><img class="img-thumbnail mb-3 mt-4" src="assets/img/dogs/lab1.png" width="180" height="180" style="transform: scale(1.20);border-style: hidden;">
                        <div class="mb-3"></div>
                        <p class="text-start">Encargado:<br>{{$laboratory->mananger->user->name . ' ' . $laboratory->mananger->user->last_name}}</p><label class="form-label" for="email" style="color: #1c478b;border-color: #1c478b;font-weight: bold;"><strong>{{$laboratory->name}}</strong><br></label>
                        <p class="text-start">{{$laboratory->description}}<br></p>
                        <div class="mb-3"></div>
                        <form>
                            <div class="row">
                                <div class="col"><a href="{{route('public.laboratorio', $laboratory->id)}}" class="btn btn-primary btn-sm" type="submit" style="text-align: center;background: #FFCD14;border-style: none;color: rgb(0,0,0);">Ingresar</a></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
