@extends('backend.template.base')

@section('title', '')

@section('content')
    <div class="row">
        <div class="col">
            @component('backend.template.components.base.cards.card')
                @slot('cardTitle')
                    Breadcrumb
                @endslot
                @slot('cardContent')

                    <nav class="breadcrumb">
                        <a class="breadcrumb-item" href="#">Home</a>
                        <a class="breadcrumb-item" href="#">Library</a>
                        <a class="breadcrumb-item" href="#">Data</a>
                        <span class="breadcrumb-item active">Bootstrap</span>
                    </nav>

                @endslot
            @endcomponent
        </div>
    </div>
@endsection
