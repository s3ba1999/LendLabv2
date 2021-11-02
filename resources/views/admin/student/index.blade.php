@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex justify-content-between align-items-center mb-4">
            <h3 class="text-dark mb-0" style="font-weight: bold;">Estudiantes</h3>
            <a href="{{ route('student.create') }}" class="btn btn-success btn-icon-split" role="button"><span class="text-white-50 icon"><i class="fas fa-check"></i></span><span class="text-white text">Añadir Estudiante</span></a>
        </div>
        <div class="row" style="margin-bottom: 25px;margin-right: 0px;margin-left: -15px;">
            <div class="col" style="width: 736.2px;">
                <div class="table-responsive" style="margin: 0px;margin-bottom: 18px;">

                    <table class="table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Telefono</th>
                                <th>Carnet</th>
                                <th>Codigo</th>
                                <th>Carrera</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $key => $student)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$student->user->name}}</td>
                                    <td>{{$student->user->email}}</td>
                                    <td>{{$student->user->cellphone}}</td>
                                    <td>{{$student->user->ci}}</td>
                                    <td>{{$student->code}}</td>
                                    <td>{{$student->career}}</td>
                                    <td>
                                        <a href="{{route('student.edit', $student->id)}}" class="btn btn-primary btn-icon-split" role="button" style="background: rgb(220,223,78);"><span class="text-white-50 icon"><i class="fas fa-pen"></i></span><span class="text-white text">Editar</span></a>
                                        <form action="{{route('student.destroy', $student->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-primary btn-icon-split" type="submit" style="background: rgb(223,87,78);"><span class="text-white-50 icon"><i class="far fa-trash-alt"></i></span><span class="text-white text">Eliminar</span></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
