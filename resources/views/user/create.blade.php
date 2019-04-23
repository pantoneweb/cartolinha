@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                        <h3 class="panel-title">Gerenciar Usuário</h3>
                    </div>
                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 text-right">
                        {!! Button::primary('Listar Usuários')->asLinkTo(route('user.index'))->extraSmall() !!}
                    </div>
                </div>
            </div>
            <div class="panel-body">
                @include('user.form')
            </div>
        </div>
    </div>
@endsection