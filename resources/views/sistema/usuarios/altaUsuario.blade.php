@extends('sistema.principal')
@section('contenido')
<div class="card">
    <div class="card-body">
        <h4 class="card-title text-primary">Usuario</h4>
        <h6 class="card-subtitle">ConKalmhe</h6>
        <form action="{{route('guardaUsuario')}}" class="form p-t-20" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="row">
                <div class="col-lg-0">
                    @if($errors->first('idUsu'))
                        <i>{{$errors->first('idUsu')}}</i>
                    @endif
                    <div class="form-group">
                        <div class="input-group">
                            <input type="hidden" name="idUsu" id="idUsu" class="form-control" value="" readonly="readonly">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    @if($errors->first('nombre'))
                        <i>{{$errors->first('nombre')}}</i>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputname"><b>Nombre</b></label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-user"></i></div>
                            <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre')}}">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    @if($errors->first('usuario'))
                        <i>{{$errors->first('usuario')}}</i>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputname"><b>Usuario</b></label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-user"></i></div>
                            <input type="text" name="usuario" id="usuario" class="form-control" value="{{old('usuario')}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    @if($errors->first('password'))
                        <i>{{$errors->first('password')}}</i>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputname"><b>Password</b></label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-lock"></i></div>
                            <input type="password" name="password" id="password" class="form-control" value="{{old('password')}}">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    @if($errors->first('permisos'))
                        <i>{{$errors->first('permisos')}}</i>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputname"><b>Tipo de Usuario</b></label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-tag"></i></div>
                            <input type="text" name="permisos" id="permisos" class="form-control" value="{{old('permisos')}}">
                        </div>
                    </div>
                </div>
            </div>
            {{-- <button type="submit" class="btn btn-success btn-flat btn-addon m-b-10 m-l-5 waves-effect waves-light m-r-10" value="Guardar"><i class="ti-plus">Guardar</i></button> --}}
            {{-- <button type="reset" class="btn btn-danger btn-flat btn-addon m-b-10 m-l-5 waves-effect waves-light" value="Cancelar"><i class="ti-close"></i>Cancelar</button> --}}
            <button type='submit' class="btn btn-success btn-flat btn-addon m-b-10 m-l-5 waves-effect waves-light m-r-10" Value='Guardar'><i class="ti-plus"></i>Guardar</button>
            <button type="reset" class="btn btn-danger btn-flat btn-addon m-b-10 m-l-5 waves-effect waves-light" value="Cancelar"><i class="ti-close"></i>Cancelar</button>
        </form>
    </div>
</div>
@stop