@extends('sistema.principal')
@section('contenido')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Reporte Marcas</h4>
            <h6 class="card-subtitle">Conkalmhe</h6>
            <div class="table-responsive m-t-40">
                <table  class="table table-hover">
                    <thead>
                        <tr>
                            <th>Clave</th>
                            <th>Marca</th>
                            <th>Operaciones</th>
                            @foreach($marcas as $ma)
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$ma->idMarca}}</td>
                            <td>{{$ma->marca}}</td>
                            <td>
                                @if($ma->deleted_at =="")
                                    <a href="{{URL::action('marcaController@modificaMarca',['idMarca'=>$ma->idMarca])}}" class="opt">
                                        <i class="fa fa-pencil fa-lg fa-fw" title="modificar"></i>
                                    </a>
                                    <a href="{{URL::action('marcaController@eliminaMarca',['idMarca'=>$ma->idMarca])}}" class="opt">
                                        <i class="fa fa-toggle-on fa-lg fa-fw" title="Inhabilitar"></i>
                                    </a>
                                @else
                                    <a href="{{URL::action('marcaController@restauraMarca',['idMarca'=>$ma->idMarca])}}" class="opt">
                                        <i class="fa fa-toggle-off fa-lg fa-fw" title="Restaurar"></i>
                                    </a>
                                    <a href="{{URL::action('marcaController@eFisicaMarca',['idMarca'=>$ma->idMarca])}}" class="opt">
                                        <i class="fa fa-times fa-lg fa-fw" title='Eliminar'></i>
                                    </a>
                                @endif
                            </td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop