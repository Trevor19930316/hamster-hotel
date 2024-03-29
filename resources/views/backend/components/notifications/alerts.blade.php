@extends('backend.template.base')

@section('title', '')

@section('content')
    <div class="row">
        <div class="col-12">
            @component('backend.template.components.base.cards.card')
                @slot('cardTitle')
                    Alerts
                @endslot
                @slot('cardContent')
                    <div class="alert alert-primary" role="alert">This is a primary alert—check it out!</div>
                    <div class="alert alert-secondary" role="alert">This is a secondary alert—check it out!</div>
                    <div class="alert alert-success" role="alert">This is a success alert—check it out!</div>
                    <div class="alert alert-danger" role="alert">This is a danger alert—check it out!</div>
                    <div class="alert alert-warning" role="alert">This is a warning alert—check it out!</div>
                    <div class="alert alert-info" role="alert">This is a info alert—check it out!</div>
                    <div class="alert alert-light" role="alert">This is a light alert—check it out!</div>
                    <div class="alert alert-dark" role="alert">This is a dark alert—check it out!</div>
                    <script>
                        // $(".alert").alert()
                        // $(".alert").alert('close')
                        // $(".alert").alert('dispose')
                    </script>
                @endslot
            @endcomponent
        </div>
    </div>
@endsection
