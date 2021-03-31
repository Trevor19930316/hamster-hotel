@extends('backend.template.base')
@section('htmlHeadPlugin')
    <?php
    $EInput = new \Libraries\element\EInput();
    ?>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-6">
            @component('backend.template.components.base.filter.filter')
            @endcomponent
        </div>
        <div class="col-sm-6">
            @component('backend.template.components.base.cards.card')
                @slot('cardContent')
                    @component('backend.template.components.base.row.markdown')
                        @slot('content')
                            @markdown
                            @verbatim
                                @component('backend.template.components.base.filter.filter')
                                @endcomponent
                            @endverbatim
                            @endmarkdown
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent
        </div>
        <div class="col-sm-6">
            @component('backend.template.components.base.filter.filter')
                @slot('filterKeywordField',[1 => '欄位 1', 2 => '欄位 2'])
            @endcomponent
        </div>
        <div class="col-sm-6">
            @component('backend.template.components.base.cards.card')
                @slot('cardTitle','搜尋欄位')
                @slot('cardContent')
                    <p>
                        <b>slot</b><br>
                        - filterKeywordField (array)
                    </p>
                    @component('backend.template.components.base.row.markdown')
                        @slot('content')
                            @markdown
                            @verbatim
                                @component('backend.template.components.base.filter.filter')
                                    @slot('filterKeywordField',[1 => '欄位 1', 2 => '欄位 2'])
                                @endcomponent
                            @endverbatim
                            @endmarkdown
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent
        </div>
        <div class="col-sm-6">
            @component('backend.template.components.base.filter.filter')
                @slot('filterKeywordField',[1 => '欄位 1', 2 => '欄位 2'])
                @slot('filterMoreContent')
                    @component('backend.template.components.base.filter.filterMore')
                        @slot('filterMoreLabel','label')
                        @slot('filterMoreContent')
                            <?php
                            $ESelect = new \Libraries\element\ESelect();
                            $ESelect->setName('keySelect');
                            $ESelect->setFirstOption();
                            $ESelect->setOptions([1 => '123123']);
                            $ESelect->setSelectedOption(request()->input($ESelect->getName()));
                            $ESelect->isColored();
                            $ESelect->show();
                            ?>
                        @endslot
                    @endcomponent
                    @component('backend.template.components.base.filter.filterMore')
                        @slot('filterMoreLabel','label')
                        @slot('filterMoreContent')
                            <?php
                            $ESelect = new \Libraries\element\ESelect();
                            $ESelect->setName('keySelect2');
                            $ESelect->setFirstOption();
                            $ESelect->setOptions([1 => '123123']);
                            $ESelect->setSelectedOption(request()->input($ESelect->getName()));
                            $ESelect->isColored();
                            $ESelect->show();
                            ?>
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent
        </div>
        <div class="col-sm-6">
            @component('backend.template.components.base.cards.card')
                @slot('cardTitle','進階搜尋')
                @slot('cardContent')
                    @component('backend.template.components.base.row.markdown')
                        @slot('content')
                            @markdown
                            @verbatim
                                @component('backend.template.components.base.filter.filter')
                                    @slot('filterKeywordField',[1 => '欄位 1', 2 => '欄位 2'])
                                    @slot('filterMoreContent')
                                        @component('backend.template.components.base.filter.filterMore')
                                            @slot('filterMoreLabel','label')
                                            @slot('filterMoreContent')
                                                filterMoreContent
                                            @endslot
                                        @endcomponent
                                        @component('backend.template.components.base.filter.filterMore')
                                            @slot('filterMoreLabel','label')
                                            @slot('filterMoreContent')
                                                filterMoreContent
                                            @endslot
                                        @endcomponent
                                    @endslot
                                @endcomponent
                            @endverbatim
                            @endmarkdown
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent
        </div>
    </div>
@endsection
