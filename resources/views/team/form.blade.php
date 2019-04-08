<div class="row">
    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
        {!! form_start($form) !!}
        <div class="row">
            <div class="col-xs-12">
                <div class="row">
                    <div class="col-xs-12 ">
                        {!! form_row($form->name) !!}
                    </div>
                    <div class="col-xs-12 ">
                        {!! form_row($form->photo) !!}
                    </div>
                </div>
                {!! form_row($form->submit) !!}
                {!! form_row($form->cancel) !!}
            </div>
        </div>
        {!! form_end($form, false) !!}
    </div>
</div>