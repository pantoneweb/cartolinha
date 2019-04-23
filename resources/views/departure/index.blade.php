@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                        <h3 class="panel-title">Partidas</h3>
                    </div>
                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 text-right">
                        {!! Button::primary('Novo Partida')->asLinkTo(route('departure.create'))->extraSmall() !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            {!!
            Table::withContents($data->items())
            ->striped()
            ->condensed()
            ->hover()
            ->callback('Ações', function($field, $model) {

                $linkEdit = route('departure.edit',['id' => $model->id]);
                $linkDelete = route('departure.destroy',['id' => $model->id]);
                $formDelete = FormBuilder::plain([
                    'id' => 'form-delete-' . $model->id,
                    'url' => $linkDelete,
                    'method' => 'DELETE',
                    'style' => 'display:none'
                ]);

                $links = '';
                $links .= Button::link('Editar')->asLinkTo($linkEdit)->extraSmall() . ' | ';
                $links .= Button::link('Excluir')->addAttributes(['onclick' => "deleteRegister(\"form-delete-{$model->id}\");"])->small();
                $links .= form($formDelete);

                return $links;
            })
            !!}
        </div>
    </div>
@endsection