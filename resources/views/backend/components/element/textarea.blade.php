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
                        @slot('label','textarea')
                        @slot('content')
                            <?php
                            $ETextarea = new \Libraries\element\ETextarea();
                            $ETextarea->setName('textarea');
                            $ETextarea->setText('textarea');
                            $ETextarea->show();
                            ?>
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent
        </div>
    </div>

@endsection
