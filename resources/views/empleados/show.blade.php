@extends('master')

@section('titulo',$empleado->nombres.' '.$empleado->apellido_paterno.' '.$empleado->apellido_materno)

@section('contenido')
    @if($empleado->deleted_at!=null)
    <ol class="breadcrumb">
        <li><a href={{URL::to('empleados/desvinculados')}}>Empleados desvinculados</a></li>
        <li class="active">{{$empleado->nombres}} {{$empleado->apellido_paterno}} {{$empleado->apellido_materno}}</li>
    </ol>
        @else
        <ol class="breadcrumb">
            <li><a href={{URL::to('empleados')}}>Empleados</a></li>
            <li class="active">{{$empleado->nombres}} {{$empleado->apellido_paterno}} {{$empleado->apellido_materno}}</li>
        </ol>
    @endif
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">


            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">{{$empleado->nombres}} {{$empleado->apellido_paterno}} {{$empleado->apellido_materno}}</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 " align="center"><img alt="Foto empleado"
                                                                            src="{{URL::to('img/profile.jpg')}}"
                                                                            class="img-circle img-responsive"></div>

                        <div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                          <dl>
                            <dt>Cargo</dt>
                            <dd>{{$empleado->cargo}}</dd>
                            <dt>Fecha incorporacion</dt>
                            <dd>{{$empleado->f_incorporacion}}</dd>
                            <dt>Titulo</dt>
                               <dd>{{$empleado->titulo}}</dd>
                          </dl>
                        </div>
                        <div class=" col-md-9 col-lg-9 ">
                            <table class="table table-user-information">
                                <tbody>
                                <tr>
                                    <td>Nombres:</td>
                                    <td>{{$empleado->nombres}}</td>
                                </tr>
                                <tr>
                                    <td>Apellidos:</td>
                                    <td>{{$empleado->apellido_paterno}} {{$empleado->apellido_materno}}</td>
                                </tr>
                                <tr>
                                    <td>Rut:</td>
                                    <td>{{$empleado->rut}}</td>
                                </tr>
                                <tr>
                                <tr>
                                    <td>Fecha Nacimiento:</td>
                                    <td>{{$empleado->f_nacimiento}}</td>
                                </tr>
                                <tr>
                                    <td>Fecha Incorporacion:</td>
                                    <td>{{$empleado->f_incorporacion}}</td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td><a href="{{"mailto:".$empleado->email}}">{{$empleado->email}}</a></td>
                                </tr>
                                <tr>
                                    <td>Numero telefonico:</td>
                                    <td>{{$empleado->telefono}}</td>
                                </tr>
                                <tr>
                                    <td>Domicilio:</td>
                                    <td>{{$empleado->domicilio}}</td>
                                </tr>
                                <tr>
                                    <td>Cargo:</td>
                                    <td>{{$empleado->cargo}}</td>
                                </tr>
                                <tr>
                                    <td>Titulo universitario:</td>
                                    <td>{{$empleado->telefono}}</td>
                                </tr>
                                <tr>
                                    <td>Prevision social:</td>
                                    <td>{{$empleado->AFP->nombre}}</td>
                                </tr>
                                <tr>
                                    <td>Prevision de salud:</td>
                                    @if($empleado->id_aseguradora==null)
                                        <td>Empleado no esta afiliada a ninguna ISAPRE</td>
                                    @else
                                        <td>{{$empleado->Aseguradora->nombre}}</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td>Costo de programa de salud: </td>
                                    @if($empleado->id_aseguradora==null)
                                        <td>Empleado no tiene plan de salud</td>
                                        @else
                                        <td>{{"$".$empleado->costo_plan_salud}}</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td>Cuenta Bancaria:</td>
                                    @if($empleado->cuenta_bancaria==null)
                                        <td>Empleado sin cuenta registrada</td>
                                    @else
                                        <td>{{$empleado->cuenta_bancaria}}</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td>Sueldo base</td>
                                    <td>{{"$".$empleado->sueldo_base}}</td>
                                </tr>
                                @if($empleado->deleted_at!=null)
                                    <tr>
                                        <td>Fecha desvinculacion</td>
                                        <td>{{$empleado->deleted_at}}</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>

                            <a href="#" class="btn btn-primary">Cargas legales</a>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button"
                       class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                    @if($empleado->deleted_at!=null)
                        <span class="pull-right">
                            <a class="btn btn-success btn-sm" data-toggle="tooltip" title="Restaurar empleado"
                               href="{{route('empleados.restaurar',$empleado->rut)}}">
                                <span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>
                            </a>
                            <a class="btn btn-danger btn-sm" data-toggle="tooltip" title="Eliminar empleado"
                               href="{{route('empleados.delete',$empleado->rut)}}" onclick="alert('¡Se eliminara al empleado!');">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </a>
                        </span>
                        @else
                        <span class="pull-right">
                            <a href="{{URL::to('empleados/'.$empleado->rut.'/edit')}}" data-original-title="Edit this user" data-toggle="tooltip" type="button"
                               class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a href="{{route('empleados.destroy',$empleado->rut)}}" data-original-title="Remove this user" data-toggle="tooltip" type="button"
                               onclick="alert('¿Seguro que quiere eliminar empleado?' +
                            '\nPuedes recuperarlo despues');"
                               class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                        @endif
                </div>

            </div>
        </div>
    </div>
@stop