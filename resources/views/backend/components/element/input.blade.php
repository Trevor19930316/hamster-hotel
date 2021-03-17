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
                            <input class="form-control" id="name" type="text" placeholder="Enter your name">
                        @endslot
                    @endcomponent
                    @component('backend.template.components.base.row.form-row')
                        @slot('label','Number')
                        @slot('content')
                            <input class="form-control" id="number" type="number">
                        @endslot
                    @endcomponent
                    @component('backend.template.components.base.row.form-row')
                        @slot('label','Email')
                        @slot('content')
                            <input class="form-control" id="email" type="email" name="email"
                                   placeholder="Enter Email"
                                   autocomplete="email">
                        @endslot
                        @slot('helpBlock')
                            Please enter your email
                        @endslot
                    @endcomponent
                    @component('backend.template.components.base.row.form-row')
                        @slot('label','Password')
                        @slot('content')
                            <input class="form-control" id="password" type="password" name="password"
                                   placeholder="Password" autocomplete="new-password">
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
