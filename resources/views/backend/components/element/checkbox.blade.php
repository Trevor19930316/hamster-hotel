@extends('backend.template.base')

@section('title', '')

@section('content')

    <div class="row">
        <div class="col-sm-6">
            @component('backend.template.components.base.cards.card')
                @slot('cardTitle')
                    radio
                @endslot
                @slot('cardContent')
                    @component('backend.template.components.base.row.form-row')
                        @slot('label','checkbox')
                        @slot('content')
                            <?php
                            $ECheckbox = new \Libraries\element\ECheckbox();
                            $ECheckbox->setName('checkbox');
                            $ECheckbox->setCheckboxValue([
                                '2019' => '2019',
                                '2020' => '2020',
                                '2021' => '2021',
                            ]);
                            $ECheckbox->show();
                            ?>
                        @endslot
                    @endcomponent
                    @component('backend.template.components.base.row.form-row')
                        @slot('label','checkbox inline')
                        @slot('content')
                            <div>
                                <?php
                                $ECheckbox->setName('checkbox_inline');
                                $ECheckbox->setCheckboxValue([
                                    '2019' => '2019',
                                    '2020' => '2020',
                                    '2021' => '2021',
                                ]);
                                $ECheckbox->setCheckedValue('2020');
                                $ECheckbox->isInline();
                                $ECheckbox->show();
                                ?>
                            </div>
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent
        </div>
    </div>

@endsection
