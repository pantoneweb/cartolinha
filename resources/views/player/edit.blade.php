@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <h3 class="panel-title">Gerenciar Jogador</h3>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
                        {!! Button::primary('Listar Jogadores')->asLinkTo(route('player.index'))->extraSmall() !!}
                    </div>
                </div>
            </div>
            <div class="panel-body">
                @include('player.form')
            </div>
        </div>
    </div>
@endsection