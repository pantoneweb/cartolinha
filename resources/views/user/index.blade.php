@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <h3 class="panel-title">Planos</h3>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
                        {!! Button::primary('Novo Plano')->asLinkTo(route($prefixModuleControl . '.create'))->extraSmall() !!}
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
            ->callback('Ações', function($field, $model) use ($prefixModuleControl) {

                $linkEdit = route($prefixModuleControl . '.edit',['award' => $model->id]);
                $linkDelete = route($prefixModuleControl.'.destroy',['award' => $model->id]);
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