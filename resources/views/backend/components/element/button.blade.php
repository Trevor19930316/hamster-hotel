@extends('backend.template.base')

@section('title', '')

@section('content')

    <div class="row">
        <div class="col-sm-6">
            @component('backend.template.components.base.cards.card')
                @slot('cardTitle')
                    button
                @endslot
                @slot('cardContent')
                    @component('backend.template.components.base.row.form-row')
                        @slot('label','button')
                        @slot('content')
                            <?php
                            $EButton = new \Libraries\element\EButton();
                            $EButton->setClasses(['btn-primary', 'shadow-primary']);
                            $EButton->setType('button');
                            $EButton->setName('button');
                            $EButton->show();
                            ?>
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent
            @component('backend.template.components.base.cards.card')
                @slot('cardTitle')
                    submit button
                @endslot
                @slot('cardContent')
                    @component('backend.template.components.base.row.form-row')
                        @slot('label','submit')
                        @slot('content')
                            <?php
                            $EButton->setClasses(['btn-primary', 'shadow-primary']);
                            $EButton->setType('submit');
                            $EButton->setName('submit');
                            $EButton->show();
                            ?>
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent
            @component('backend.template.components.base.cards.card')
                @slot('cardTitle')
                    left icon button
                @endslot
                @slot('cardContent')
                    @component('backend.template.components.base.row.form-row')
                        @slot('label','icon button')
                        @slot('content')
                            <?php
                            $EButton->setClasses(['btn-primary', 'shadow-primary']);
                            $EButton->setType('button');
                            $EButton->setName('button');
                            $EButton->setText('下載');
                            $EButton->withLeftIcon('cloud-download');
                            $EButton->show();
                            ?>
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent

            @component('backend.template.components.base.cards.card')
                @slot('cardTitle')
                    a button
                @endslot
                @slot('cardContent')
                    @component('backend.template.components.base.row.form-row')
                        @slot('label','a button')
                        @slot('content')
                            <?php
                            $EButtonA = new \Libraries\element\EButtonA();
                            $EButtonA->setClass('btn-secondary');
                            $EButtonA->setIcon('home');
                            $EButtonA->setText('首頁連結');
                            $EButtonA->setLink(route('backend.dashboard'));
                            $EButtonA->setTarget('_blank');
                            $EButtonA->show();
                            ?>
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent

        </div>
    </div>

@endsection
