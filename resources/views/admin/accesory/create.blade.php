@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex justify-content-between align-items-center mb-4" style="font-weight: bold;">
            <h3 class="text-dark mb-0">Añadir Accesorio</h3>
        </div>
        <form method="POST" action="{{route('accessory.store')}}">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="user">
                        <div class="row mb-3">
                            <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Nombres" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus></div>
                            <div class="col-sm-6"><input class="form-control form-control-user" type="text" id="disponibility" placeholder="Diponibilidad" name="disponibility" value="{{ old('disponibility') }}" required autocomplete="disponibility"></div>
                        </div>
                        <div class="mb-3"><input class="form-control form-control-user" type="text" id="description" placeholder="Descripcion" name="description" value="{{ old('description') }}" required autocomplete="description"></div>
                        <div class="mb-3"><select class="form-control form-control-user" id="laboratory_id" placeholder="laboratorio" name="laboratory_id" value="{{ old('laboratory_id') }}" required autocomplete="laboratory_id"> @foreach ($labs as $lab) <option value="{{$lab->id}}">{{$lab->name}}</option> @endforeach </select> </div>
                        <div class="row mb-3">
                            <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="number" id="amount" placeholder="Cantidad" name="amount" value="{{ old('amount') }}" required autocomplete="amount"></div>
                            <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="type" placeholder="Tipo" name="type" value="{{ old('type') }}" required autocomplete="type"></div>
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
