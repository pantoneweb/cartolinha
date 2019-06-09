{!! form_start($form) !!}
<div class="row">
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <img class="img-fluid rounded" style="width: 100%;"
             src="{{ \Illuminate\Support\Facades\Storage::url("team/{$form->photo->getValue()}") }}" lazy="loaded">
    </div>
    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
        {!! form_row($form->name) !!}
        {!! form_row($form->photo) !!}
    </div>
</div>

<div class="submit">
    {!! form_row($form->submit) !!}
    {!! form_row($form->cancel) !!}
</div>

{!! form_end($form, false) !!}