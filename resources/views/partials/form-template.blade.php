@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                <h2 class="mb-5"><span>{{ $name }}</span></h2>
            </div>
            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 text-right">
                {!! Button::primary('Listar ' . $name)->asLinkTo(route($route))->extraSmall() !!}
            </div>
        </div>
        <div style="background: #ffffff; padding: 2rem; margin: 2rem 0;">
            @include($formTemplate)
        </div>
    </div>
@endsection