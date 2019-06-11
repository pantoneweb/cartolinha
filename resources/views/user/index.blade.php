@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                <h2 class="mb-5"><span>Usuários</span></h2>
            </div>
        </div>
        <div class="table-responsive">
            {!!
            Table::withContents($data->items())
            ->callback('Ações', function($field, $model) {
                $linkEdit = route('user.edit',['id' => $model->id]);
                $links = '';
                $links .= Button::link('Editar')->asLinkTo($linkEdit)->extraSmall();
                return $links;
            })
            !!}
        </div>
    </div>
@endsection