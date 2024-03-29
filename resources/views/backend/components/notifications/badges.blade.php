@extends('backend.template.base')

@section('title', '')

@section('content')
    <div class="row">
        <div class="col-12">
            @component('backend.template.components.base.cards.card')
                @slot('cardTitle')
                    Badges
                @endslot
                @slot('cardContent')
                    <span class="badge badge-primary">Primary</span>
                    <span class="badge badge-secondary">Secondary</span>
                    <span class="badge badge-success">Success</span>
                    <span class="badge badge-danger">Danger</span>
                    <span class="badge badge-warning">Warning</span>
                    <span class="badge badge-info">Info</span>
                    <span class="badge badge-light">Light</span>
                    <span class="badge badge-dark">Dark</span>
                    <hr>
                    <span class="badge badge-pill badge-primary">Primary</span>
                    <span class="badge badge-pill badge-secondary">Secondary</span>
                    <span class="badge badge-pill badge-success">Success</span>
                    <span class="badge badge-pill badge-danger">Danger</span>
                    <span class="badge badge-pill badge-warning">Warning</span>
                    <span class="badge badge-pill badge-info">Info</span>
                    <span class="badge badge-pill badge-light">Light</span>
                    <span class="badge badge-pill badge-dark">Dark</span>
                    <hr>
                    <a class="badge badge-primary" href="#">Primary</a>
                    <a class="badge badge-secondary" href="#">Secondary</a>
                    <a class="badge badge-success" href="#">Success</a>
                    <a class="badge badge-danger" href="#">Danger</a>
                    <a class="badge badge-warning" href="#">Warning</a>
                    <a class="badge badge-info" href="#">Info</a>
                    <a class="badge badge-light" href="#">Light</a>
                    <a class="badge badge-dark" href="#">Dark</a>
                @endslot
            @endcomponent
        </div>
    </div>
@endsection
