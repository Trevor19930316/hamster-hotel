@extends('backend.template.base')
@section('htmlHeadPlugin')
    <?php
    $EFile = new \Libraries\element\EFile();
    ?>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-6">
            @component('backend.template.components.base.cards.card')
                @slot('cardTitle')
                    File
                @endslot
                @slot('cardContent')
                    @component('backend.template.components.base.row.form-row')
                        @slot('label','File')
                        @slot('content')
                            <?php
                                $EFile->setName('file');
                                $EFile->setUploadFileMaxSize('100', 'kb');
                                $EFile->show();
                                ?>
                        @endslot
                    @endcomponent
                    @component('backend.template.components.base.row.form-row')
                        @slot('label','Multiple File')
                        @slot('content')
                            <div class="elementFile custom-file">
                                <label for="formFileLg2" class="custom-file-label"></label>
                                <input class="custom-file-input" name="formFileLg2[]" id="formFileLg2" type="file"
                                       multiple/>
                            </div>
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent
        </div>
    </div>
@endsection
