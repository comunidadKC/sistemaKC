@extends('sistema.principal')
@section('contenido')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Modifica Ubicacion</h4>
            <h6 class="card-subtitle">Conkalmhe</h6>
            <form action="{{route('editaUbicacion')}}" class="form p-t-20" method="post" enctype='multipart/form-data'>
                {{csrf_field()}}
                <div class="row">
                    <div class="col-lg-6">
                        @if($errors->first('idUb'))
                            <i>{{$errors->first('idUb')}}</i>
                        @endif
                        <div class="form-group">
                            <label for="exampleInputname">Clave Ubicacion</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-key"></i></div>
                                <input type="text" name="idUb" id="idUb" class="form-control" value="{{$ubicacionM->idUb}}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        @if($errors->first('ubicacion'))
                            <i>{{$errors->first('ubicacion')}}</i>
                        @endif
                        <div class="form-group">
                            <label for="exampleInputname">Ubicacion</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-home"></i></div>
                                <input type="text" class="form-control" name="ubicacion" id="ubicacion" value="{{$ubicacionM->ubicacion}}">
                            </div>
                        </div>
                    </div>
                </div>
                <button type='submit' class="btn btn-success  btn-flat btn-addon m-b-10 m-l-5 waves-effect waves-light m-r-10" Value='Guardar'><i class="ti-plus"></i>Guardar</button>
                <button type="reset" class="btn btn-danger btn-flat btn-addon m-b-10 m-l-5 waves-effect waves-light" value="Cancelar"><i class="ti-close"></i>Cancelar</button> 
            </form>
        </div>
    </div>
@stop