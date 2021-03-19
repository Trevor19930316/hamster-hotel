@extends('backend.template.base')

@section('title', '')

@section('content')

    <div class="row">
        <div class="col-sm-6">
            @component('backend.template.components.base.cards.card')
                @slot('cardTitle')
                    Select
                @endslot
                @slot('cardContent')
                    @component('backend.template.components.base.row.form-row')
                        @slot('label','Single Option')
                        @slot('content')
                            <?php
                            $ESelect = new \Libraries\element\ESelect();
                            $ESelect->setName('singleSelect');
                            $ESelect->setSingleOption('1', '第一個選項');
                            $ESelect->setSingleOption('2', '第二個選項');
                            $ESelect->setSingleOption('3', '第三個選項');
                            $ESelect->show();
                            ?>
                        @endslot
                    @endcomponent
                    @component('backend.template.components.base.row.form-row')
                        @slot('label','Options')
                        @slot('content')
                            <?php
                            $options = [
                                '2020' => '2020',
                                '2021' => '2021',
                                '2022' => '2022',
                            ];
                            $ESelect->setName('options');
                            $ESelect->setOptions($options);
                            $ESelect->show();
                            ?>
                        @endslot
                    @endcomponent
                        @component('backend.template.components.base.row.form-row')
                            @slot('label','Options Groups')
                            @slot('content')
                                <?php
                                $options1 = [
                                    '2020' => '2020',
                                    '2021' => '2021',
                                    '2022' => '2022',
                                ];
                                $options2 = [
                                    '0' => 'female',
                                    '1' => 'male',
                                ];
                                $ESelect->setName('optionsGroups');
                                $ESelect->setOptionGroup('year', $options1);
                                $ESelect->setOptionGroup('sex', $options2);
                                $ESelect->show();
                                ?>
                            @endslot
                        @endcomponent
                @endslot
            @endcomponent
        </div>
    </div>

@endsection
