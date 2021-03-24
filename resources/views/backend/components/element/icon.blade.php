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
                            use Illuminate\Support\Facades\Blade;$EIcon = new \Libraries\element\EIcon();
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
                            <?php
                            //compileString
                            $code = '$EIcon = new \Libraries\element\EIcon();
                            $EIcon->setIcon(\'arrow-right\');';
                            //$code .= '$EIcon->setIcon(\'arrow-right\');';
                            //$code .= '$EIcon->setTitle(\'下一頁\');';
                            //$code .= '$EIcon->show();';
                            $code = trim(Blade::compileString($code));
                            //$showCode = Blade::compileString($code);
                            //$showCode = htmlspecialchars($code);
                            ?>
                            <pre class="ds-border p-3 rounded bg-light cursor-pointer">
                                {!! $code !!}
                            </pre>
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent
        </div>
    </div>

@endsection
