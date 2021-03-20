@extends('backend.template.base')

@section('title', '')

@section('content')

    <div class="row">
        <div class="col-sm-6">
            @component('backend.template.components.base.cards.card')
                @slot('cardTitle')
                    Textarea
                @endslot
                @slot('cardContent')
                    @component('backend.template.components.base.row.form-row')
                        @slot('label','radio')
                        @slot('content')
                            <?php
                            $ERadio = new \Libraries\element\ERadio();
                            $ERadio->setName('radio');
                            $ERadio->setRadioData([
                                '2019' => '2019',
                                '2020' => '2020',
                                '2021' => '2021',
                            ]);
                            $ERadio->show();
                            ?>
                        @endslot
                    @endcomponent
                        @component('backend.template.components.base.row.form-row')
                            @slot('label','radio inline')
                            @slot('content')
                                <?php
                                $ERadio = new \Libraries\element\ERadio();
                                $ERadio->setName('radio');
                                $ERadio->setRadioData([
                                    '2019' => '2019',
                                    '2020' => '2020',
                                    '2021' => '2021',
                                ]);
                                $ERadio->isInline();
                                $ERadio->show();
                                ?>
                            @endslot
                        @endcomponent
                @endslot
            @endcomponent
        </div>
    </div>

@endsection
