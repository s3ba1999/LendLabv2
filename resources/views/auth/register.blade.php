@extends('layouts.auth')

@section('form')
    <div class="p-5">
        <div class="text-center">
            <h4 class="text-dark mb-4">Regístrate</h4>
        </div>
        <form class="user" action="{{ route('register_student') }}" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Nombres" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus></div>
                <div class="col-sm-6"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Apellidos" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name"></div>
            </div>
            <div class="mb-3"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Correo electrónico" name="email" value="{{ old('email') }}"required autocomplete="email"></div>
            <div class="row mb-3">
                <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="number" id="cellphone" placeholder="Telefono" name="cellphone" value="{{ old('cellphone') }}" required autocomplete="cellphone"></div>
                <div class="col-sm-6"><input class="form-control form-control-user" type="text" id="ci" placeholder="Carnet de identidad" name="ci" value="{{ old('ci') }}" required autocomplete="ci"></div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="code" placeholder="Codigo" name="code" value="{{ old('code') }}" required autocomplete="code"></div>
                <div class="col-sm-6"><input class="form-control form-control-user" type="text" id="career" placeholder="Carrera" name="career" value="{{ old('career') }}" required autocomplete="career"></div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="password" id="examplePasswordInput" placeholder="Contraseña" name="password" required></div>
                <div class="col-sm-6"><input class="form-control form-control-user" type="password" id="exampleRepeatPasswordInput" placeholder="Repetir Contraseña" name="password_confirmation" required></div>
            </div>
            <button class="btn btn-primary d-block btn-user w-100" type="submit" style="color: rgb(0,0,0);background: #FFCD14;border-style: none;">Registrar cuenta</button>
            <hr>
        </form>
        <div class="text-center"><a class="small" href="{{route('login')}}">Ya tienes una cuenta? Inicia Sesión</a></div>
    </div>
    @endsection
