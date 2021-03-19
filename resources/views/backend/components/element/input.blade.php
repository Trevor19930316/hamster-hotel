@extends('backend.template.base')

@section('title', '')

@section('content')

    <div class="row">
        <div class="col-sm-6">
            @component('backend.template.components.base.cards.card')
                @slot('cardTitle')
                    Input
                @endslot
                @slot('cardContent')
                    @component('backend.template.components.base.row.form-row')
                        @slot('label','Name')
                        @slot('content')
                            <?php
                            $EInput = new \Libraries\element\EInput();
                            $EInput->setType('text');
                            $EInput->setName('text');
                            $EInput->setId('text');
                            $EInput->setPlaceholder('Name');
                            $EInput->show();
                            ?>
                        @endslot
                    @endcomponent
                    @component('backend.template.components.base.row.form-row')
                        @slot('label','Number')
                        @slot('content')
                            <?php
                            $EInput->setType('number');
                            $EInput->setName('number');
                            $EInput->setId('number');
                            $EInput->setPlaceholder('Number');
                            $EInput->show();
                            ?>
                        @endslot
                    @endcomponent
                    @component('backend.template.components.base.row.form-row')
                        @slot('label','Email')
                        @slot('content')
                            <?php
                            $EInput->setType('email');
                            $EInput->setName('email');
                            $EInput->setId('email');
                            $EInput->setValue('test@gmail.com');
                            $EInput->setPlaceholder('Enter Email');
                            $EInput->setAutocomplete('email');
                            $EInput->show();
                            ?>
                        @endslot
                        @slot('helpBlock')
                            Please enter your email
                        @endslot
                    @endcomponent
                    @component('backend.template.components.base.row.form-row')
                        @slot('label','Password')
                        @slot('content')
                            <?php
                            $EInput->setType('password');
                            $EInput->setName('password');
                            $EInput->setId('password');
                            $EInput->setPlaceholder('Password');
                            $EInput->setAutocomplete('new-password');
                            $EInput->show();
                            ?>
                        @endslot
                        @slot('helpBlock')
                            Please enter a complex password
                        @endslot
                    @endcomponent
                    @component('backend.template.components.base.row.form-row')
                        @slot('label','Date Input')
                        @slot('content')
                            <input class="form-control" id="date-input" type="date" name="date-input"
                                   placeholder="date">
                        @endslot
                        @slot('helpBlock')
                            Please enter a valid date
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent
        </div>
    </div>

@endsection
