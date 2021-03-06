@extends('master')

@section('titulo','Empleados desvinculados')

@section('contenido')
    <div class="container">
        <table class="table table-striped">
            <thead>
            <th>Rut</th>
            <th>Nombres</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Cargo</th>
            <th>Fecha Desvinculacion</th>
            <th>Acciones</th>
            </thead>
            @foreach($empleados as $empleado)
                <tr>
                    <td>{{$empleado->rut}}</td>
                    <td>{{$empleado->nombres}}</td>
                    <td>{{$empleado->apellido_paterno}}</td>
                    <td>{{$empleado->apellido_materno}}</td>
                    <td>{{$empleado->telefono}}</td>
                    <td>{{$empleado->email}}</td>
                    <td>{{$empleado->cargo}}</td>
                    <td>{{$empleado->deleted_at}}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" data-toggle="tooltip" title="Informacion detallada"
                           href="{{URL::to('empleados/'.$empleado->rut)}}">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        </a>
                        <a class="btn btn-success btn-sm" data-toggle="tooltip" title="Restaurar empleado"
                           href="{{route('empleados.restaurar',$empleado->rut)}}" onclick="alert('Se restaurara el empleado')">
                            <span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>
                        </a>
                        <a class="btn btn-danger btn-sm" data-toggle="tooltip" title="Eliminar empleado"
                           href="{{route('empleados.delete',$empleado->rut)}}" onclick="alert('Se eliminara el empleado!');">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="text-center"> {!! $empleados->render() !!}</div>
@stop