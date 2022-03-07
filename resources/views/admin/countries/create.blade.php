@extends('admin.layouts.dashboard')

@section('content')

{{-- VALIDACIONES-RESPUESTA--}}
@include('admin.layouts.success')   {{-- SAVE --}}
@include('admin.layouts.danger')    {{-- EDITAR --}}
@include('admin.layouts.delete')    {{-- DELELTE --}}
{{-- VALIDACIONES-RESPUESTA --}}
<div class="right_col" role="main">

    <div class="x_content">
        <br />
        <form method="POST" action="{{ route('countries.store') }}" id="form" data-parsley-validate class="form-horizontal form-label-left">
        @csrf
                
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="abbreviation">Abreviación:</label>
                <div class="col-md-4 col-sm-4 ">
                    <input type="text" id="abbreviation" name="abbreviation" required="required" class="form-control ">
                </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Nombre:</label>
                <div class="col-md-4 col-sm-4 ">
                    <input type="text" id="name" name="name" required="required" class="form-control ">
                </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="code_phone">Código de Telefono:</label>
                <div class="col-md-4 col-sm-4 ">
                    <input type="text" id="code_phone" name="code_phone" required="required" class="form-control ">
                </div>
            </div>
         
            <div class="ln_solid"></div>
            <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                    <a href="{{ route('countries.index') }}" class="btn btn-danger" type="button">Cancel</a>
                </div>
            </div>

        </form>
    </div>
</div>

@endsection
