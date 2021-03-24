@extends('backend.template.base')

@section('title', '')

@section('content')

    <div class="row">
        <div class="col-sm-6">
            @component('backend.template.components.base.cards.card')
                @slot('cardTitle')
                    Icon
                @endslot
                @slot('cardContent')
                    @component('backend.template.components.base.row.form-row')
                        @slot('label','上一頁')
                        @slot('content')
                            <?php
                            $EIcon = new \Libraries\element\EIcon();
                            $EIcon->setIcon('arrow-left');
                            $EIcon->setTitle('上一頁');
                            $EIcon->show();
                            ?>
                        @endslot
                    @endcomponent
                    @component('backend.template.components.base.row.form-row')
                        @slot('label','下一頁')
                        @slot('content')
                            <?php
                            $EIcon = new \Libraries\element\EIcon();
                            $EIcon->setIcon('arrow-right');
                            $EIcon->setTitle('下一頁');
                            $EIcon->show();
                            ?>
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent
            @component('backend.template.components.base.cards.card')
                @slot('cardTitle')
                    Icon
                @endslot
                @slot('cardContent')
                    @component('backend.template.components.base.row.form-row')
                        @slot('label','code')
                        @slot('content')
                            @component('backend.template.components.base.row.markdown')
                                @slot('content')
                                    @markdown
                                    # php code
                                    ---
                                        $EIcon = new \Libraries\element\EIcon();
                                        $EIcon->setIcon('arrow-right');
                                        $EIcon->setIcon('arrow-right');
                                        $EIcon->setTitle('下一頁');
                                        $EIcon->show();
                                    # component code
                                    ---
                                    @verbatim
                                        @component('backend.template.components.base.row.form-row')
                                        @endcomponent
                                    @endverbatim
                                    @endmarkdown
                                @endslot
                            @endcomponent
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent
        </div>
    </div>

@endsection
