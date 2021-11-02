@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex justify-content-between align-items-center mb-4" style="font-weight: bold;">
            <h3 class="text-dark mb-0">Editar Encargado</h3>
        </div>
        <form method="POST" action="{{route('mananger.update', $mananger->id)}}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <div class="user">
                        <div class="row mb-3">
                            <div class="col-sm-6 mb-3 mb-sm-0"><input value="{{$mananger->user->name}}" class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Nombres" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus></div>
                            <div class="col-sm-6"><input value="{{$mananger->user->last_name}}" class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Apellidos" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name"></div>
                        </div>
                        <div class="mb-3"><input value="{{$mananger->user->email}}" class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Correo electrónico" name="email" value="{{ old('email') }}"required autocomplete="email"></div>
                        <div class="row mb-3">
                            <div class="col-sm-6 mb-3 mb-sm-0"><input value="{{$mananger->user->cellphone}}" class="form-control form-control-user" type="number" id="cellphone" placeholder="Telefono" name="cellphone" value="{{ old('cellphone') }}" required autocomplete="cellphone"></div>
                            <div class="col-sm-6"><input value="{{$mananger->user->ci}}" class="form-control form-control-user" type="text" id="ci" placeholder="Carnet de identidad" name="ci" value="{{ old('ci') }}" required autocomplete="ci"></div>
                        </div>
                        <div class="mb-3"><select class="form-control form-control-user" type="text" id="career" placeholder="Laboratorio" name="laboratory_id" value="{{ old('laboratory_id') }}" required>@foreach ($labs as $lab)    <option @if($lab->id == $mananger->laboratory->id) selected @endif value="{{ $lab->id }}">{{ $lab->name }}</option>@endforeach</select>
                        </div>
                        <button class="btn btn-primary d-block btn-user w-100" type="submit" style="color: rgb(0,0,0);background: #FFCD14;border-style: none;">Finalizar Registro</button>
                        <hr>
                    </div>
                </div>
            </div>
        </form>
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0"></div>
        </div>
    </div>
@endsection
