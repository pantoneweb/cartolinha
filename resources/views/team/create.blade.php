@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <h3 class="panel-title">Gerenciar Time</h3>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
                        {!! Button::primary('Listar Times')->asLinkTo(route('admin.team.index'))->extraSmall() !!}
                    </div>
                </div>
            </div>
            <div class="panel-body">
                @include('modules.admin.team.form')
            </div>
        </div>
    </div>
@endsection