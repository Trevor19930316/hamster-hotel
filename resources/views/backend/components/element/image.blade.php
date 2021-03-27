@extends('backend.template.base')
@section('htmlHeadPlugin')
    <?php
    $EImage = new \Libraries\element\EImage();
    ?>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-6">
            @component('backend.template.components.base.cards.card')
                @slot('cardTitle')
                    Image
                @endslot
                @slot('cardContent')
                    @component('backend.template.components.base.row.form-row')
                        @slot('label','Image')
                        @slot('content')
                            <?php
                            $EImage->setUrl('https://www.w3schools.com/w3css/img_lights.jpg');
                            $EImage->show();
                            ?>
                        @endslot
                    @endcomponent
                    @component('backend.template.components.base.row.form-row')
                        @slot('label','Square Image')
                        @slot('content')
                            <?php
                            $EImage->setUrl('https://www.w3schools.com/w3css/img_lights.jpg');
                            $EImage->isSquare(300);
                            $EImage->show();
                            ?>
                        @endslot
                    @endcomponent
                    @component('backend.template.components.base.row.form-row')
                        @slot('label','Circle Image')
                        @slot('content')
                            <?php
                            $EImage->setUrl('https://www.w3schools.com/w3css/img_lights.jpg');
                            $EImage->isCircle(200);
                            $EImage->show();
                            ?>
                        @endslot
                    @endcomponent
                        @component('backend.template.components.base.row.form-row')
                            @slot('label','Thumbnail Image')
                            @slot('content')
                                <?php
                                $EImage->setUrl('https://www.w3schools.com/w3css/img_lights.jpg');
                                $EImage->isThumbnail();
                                $EImage->show();
                                ?>
                            @endslot
                        @endcomponent
                @endslot
            @endcomponent
        </div>
    </div>
@endsection
