@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex justify-content-between align-items-center mb-4" style="font-weight: bold;">
            <h3 class="text-dark mb-0">Editar Docente</h3>
        </div>
            <div class="row">
                <div class="col">
                    <form class="user" method="POST" action="{{ route('docent.update', $docent->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <div class="col-sm-6 mb-3 mb-sm-0"><input value="{{$docent->user->name}}" class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Nombres" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus></div>
                            <div class="col-sm-6"><input value="{{$docent->user->last_name}}" class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Apellidos" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name"></div>
                        </div>
                        <div class="mb-3"><input value="{{$docent->user->email}}" class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Correo electrónico" name="email" value="{{ old('email') }}"required autocomplete="email"></div>
                        <div class="row mb-3">
                            <div class="col-sm-6 mb-3 mb-sm-0"><input value="{{$docent->user->cellphone}}" class="form-control form-control-user" type="number" id="cellphone" placeholder="Telefono" name="cellphone" value="{{ old('cellphone') }}" required autocomplete="cellphone"></div>
                            <div class="col-sm-6"><input value="{{$docent->user->ci}}" class="form-control form-control-user" type="text" id="ci" placeholder="Carnet de identidad" name="ci" value="{{ old('ci') }}" required autocomplete="ci"></div>
                        </div>
                        <button class="btn btn-primary d-block btn-user w-100" type="submit" style="color: rgb(0,0,0);background: #FFCD14;border-style: none;">Finalizar Registro</button>
                        <hr>
                    </form>
                </div>
            </div>
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0"></div>
        </div>
    </div>
@endsection
