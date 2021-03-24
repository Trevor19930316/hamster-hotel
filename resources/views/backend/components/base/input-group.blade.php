@extends('backend.template.base')
@section('htmlHeadPlugin')
    <?php
    $EInput = new \Libraries\element\EInput();
    ?>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-6">
            @component('backend.template.components.base.cards.card')
                @slot('cardTitle')
                    input group
                @endslot
                @slot('cardContent')
                    @component('backend.template.components.base.row.form-row')
                        @slot('label','內容文字')
                        @slot('content')
                            @component('backend.template.components.base.input-group')
                                @slot('prependCount',1)
                                @slot('prependType1','text')
                                @slot('prependContent1','user')
                                @slot('contentDiv')
                                    text
                                @endslot
                                @slot('appendCount',1)
                                @slot('appendType1','text')
                                @slot('appendContent1','user')
                            @endcomponent
                        @endslot
                    @endcomponent
                    @component('backend.template.components.base.row.form-row')
                        @slot('label','內容 Input')
                        @slot('content')
                            @component('backend.template.components.base.input-group')
                                @slot('prependCount',1)
                                @slot('prependType1','text')
                                @slot('prependContent1','@')
                                @slot('content')
                                    <?php
                                    $EInput->setName('text');
                                    $EInput->setType('text');
                                    $EInput->show();
                                    ?>
                                @endslot
                            @endcomponent
                        @endslot
                    @endcomponent
                    @component('backend.template.components.base.row.form-row')
                        @slot('label','前後 button')
                        @slot('content')
                            @component('backend.template.components.base.input-group')
                                @slot('prependCount',1)
                                @slot('prependContent1')
                                    <button class="btn btn-secondary" type="button">btn</button>
                                @endslot
                                @slot('content')
                                    <?php
                                    $EInput->setName('text');
                                    $EInput->setType('text');
                                    $EInput->show();
                                    ?>
                                @endslot
                                @slot('appendCount',1)
                                @slot('appendContent1')
                                    <button class="btn btn-secondary" type="button">btn</button>
                                @endslot
                            @endcomponent
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent
        </div>
    </div>
@endsection
