@extends('backend.template.base')
@section('htmlHeadPlugin')
    <?php
    $EInput = new \Libraries\element\EInput();
    ?>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-6">
            {{-- form 模組 --}}
            @component('backend.template.components.base.form')
                @slot('formName','formName')
                @slot('formMethod','get')
                @slot('formDisabledNullElements','true')
                @slot('formValidation','false')
                @slot('formContent')
                    @component('backend.template.components.base.cards.card')
                        @slot('cardTitle')
                            form 沒有驗證
                        @endslot
                        @slot('cardContent')
                            @component('backend.template.components.base.row.form-row')
                                @slot('label','Name')
                                @slot('content')
                                    <?php
                                    $EInput->setType('text');
                                    $EInput->setName('text');
                                    $EInput->setPlaceholder('Name');
                                    $EInput->isRequired();
                                    $EInput->show();
                                    ?>
                                @endslot
                            @endcomponent
                        @endslot
                        @slot('cardFooter')
                            <div class="text-right">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent
            {{-- end form 模組 --}}
        </div>
        <div class="col-sm-6">
            {{-- form 模組 --}}
            @component('backend.template.components.base.form')
                @slot('formName','formName2')
                @slot('formAction','')
                @slot('formMethod','get')
                @slot('formContent')
                    @component('backend.template.components.base.cards.card')
                        @slot('cardTitle')
                            form 有驗證
                        @endslot
                        @slot('cardContent')
                            @component('backend.template.components.base.row.form-row')
                                @slot('label','Name')
                                @slot('content')
                                    <?php
                                    $EInput->setType('text');
                                    $EInput->setName('text');
                                    $EInput->setPlaceholder('Name');
                                    $EInput->isRequired();
                                    $EInput->show();
                                    ?>
                                @endslot
                            @endcomponent
                        @endslot
                        @slot('cardFooter')
                            <div class="text-right">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent
            {{-- end form 模組 --}}
        </div>
        <div class="col-sm-6">
            {{-- form 模組 --}}
            @component('backend.template.components.base.form')
                @slot('formName','formName3')
                @slot('formAction','')
                @slot('formMethod','post')
                @slot('formContent')
                    @component('backend.template.components.base.cards.card')
                        @slot('cardTitle')
                            form post
                        @endslot
                        @slot('cardContent')
                            @component('backend.template.components.base.row.form-row')
                                @slot('label','Name')
                                @slot('content')
                                    <?php
                                    $EInput->setType('text');
                                    $EInput->setName('text');
                                    $EInput->setPlaceholder('Name');
                                    $EInput->isRequired();
                                    $EInput->show();
                                    ?>
                                @endslot
                            @endcomponent
                        @endslot
                        @slot('cardFooter')
                            <div class="text-right">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent
            {{-- end form 模組 --}}
        </div>
        <div class="col-sm-6">
            {{-- form 模組 --}}
            @component('backend.template.components.base.form')
                @slot('formName','formName3')
                @slot('formAction','')
                @slot('formMethod','post')
                @slot('method','put')
                @slot('formContent')
                    @component('backend.template.components.base.cards.card')
                        @slot('cardTitle')
                            form put
                        @endslot
                        @slot('cardContent')
                            @component('backend.template.components.base.row.form-row')
                                @slot('label','Name')
                                @slot('content')
                                    <?php
                                    $EInput->setType('text');
                                    $EInput->setName('text');
                                    $EInput->setPlaceholder('Name');
                                    $EInput->isRequired();
                                    $EInput->show();
                                    ?>
                                @endslot
                            @endcomponent
                        @endslot
                        @slot('cardFooter')
                            <div class="text-right">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent
            {{-- end form 模組 --}}
        </div>
    </div>
@endsection
