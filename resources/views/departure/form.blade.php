<div class="row">
    <div class="col-xl-12 col-sm-6 col-sm-offset-3">
        {!! form_start($form) !!}
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-12 ">
                        {!! form_row($form->name) !!}
                    </div>
                    <div class="col-xl-12 ">
                        {!! form_row($form->account_id) !!}
                    </div>
                    <div class="col-xl-12 ">
                        {!! form_row($form->value) !!}
                    </div>
                    <div class="col-xl-12 ">
                        {!! form_row($form->qt_notes) !!}
                    </div>
                    <div class="col-xl-12 ">
                        {!! form_row($form->qt_users) !!}
                    </div>
                    <div class="col-xl-12 ">
                        {!! form_row($form->qt_companies) !!}
                    </div>
                    <div class="col-xl-12 ">
                        {!! form_row($form->public) !!}
                    </div>
                </div>
                {!! form_row($form->submit) !!}
                {!! form_row($form->cancel) !!}
            </div>
        </div>
        {!! form_end($form, false) !!}
    </div>
</div>