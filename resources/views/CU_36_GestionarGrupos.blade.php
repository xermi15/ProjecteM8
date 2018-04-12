@extends('layouts.master')
@section('content')
<div class="container" style="width: 100%;">
    <div class="row">
        <div class="form-group">
            <table style="text-align: center; background: #455A64; color: white;" class="table table-condensed table-striped table-bordered">
                <thead>
                    <tr>
                        <th style="text-align: center;">Gestionar grups</th> 
                    </tr>
                </thead>
            </table>

        </div>
        @include('CU_40_CrearGrupo')

        @include('CU_41_MostrarGrups')
    </div>
</div>
@stop