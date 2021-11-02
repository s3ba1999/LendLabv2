@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex justify-content-between align-items-center mb-4" style="font-weight: bold;">
            <h3 class="text-dark mb-0">Editar Laboratorio</h3>
        </div>
        <form method="POST" action="{{route('laboratory.update', $laboratory->id)}}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <form class="user">
                        <input value="{{$laboratory->name}}" class="form-control form-control-user" type="text" id="name" aria-describedby="name" placeholder="Nombre" name="name" style="margin-bottom: 10px;">
                        <textarea class="form-control form-control-user" id="descripcion" aria-describedby="name" placeholder="Descripcion" name="description" style="margin-bottom: 10px;">{{$laboratory->description}}</textarea>
                        <button class="btn btn-primary d-block btn-user w-100" type="submit" style="background: rgb(255,205,20);color: rgb(0,0,0);">Finalizar Registro</button>
                        <hr>
                    </form>
                </div>
            </div>
        </form>
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0"></div>
        </div>
    </div>
@endsection
