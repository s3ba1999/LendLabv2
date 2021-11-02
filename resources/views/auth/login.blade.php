@extends('layouts.auth')

@section('form')
    <div class="p-5">
        <div class="text-center">
            <h4 class="text-dark mb-4">Bienvenido a Lend Lab</h4>
        </div>
        <form class="user" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Correo Electrónico" name="email"></div>
            <div class="mb-3"><input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Contraseña" name="password"></div>
            <div class="mb-3">
                <div class="custom-control custom-checkbox small">
                    <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1">Recuérdame</label></div>
                </div>
            </div><button class="btn btn-primary d-block btn-user w-100" type="submit" style="background: #FFCD14;border-style: none;border-color: rgb(0,0,0);color: rgb(0,0,0);">Iniciar Sesión</button>
            <hr>
        </form>
        <div class="text-center"><a class="small" href="{{route('register')}}">Créate una cuenta</a></div>
    </div>
@endsection
