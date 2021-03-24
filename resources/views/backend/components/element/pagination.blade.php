@extends('backend.template.base')

@section('title', '')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            @component('backend.template.components.base.cards.card')
                @slot('cardTitle')
                    pagination
                @endslot
                @slot('cardContent')
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                @endslot
            @endcomponent
        </div>
    </div>
@endsection
