@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <h3 class="panel-title">Atividades</h3>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
                        {!! Button::primary('Nova Atividade')->asLinkTo(route('activity.create'))->extraSmall() !!}
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

                $linkEdit = route('activity.edit',['id' => $model->id]);
                $linkDelete = route('activity.destroy',['id' => $model->id]);
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