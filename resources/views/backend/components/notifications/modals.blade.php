@extends('backend.template.base')

@section('title', '')

@section('content')
    <div class="row">
        <div class="col-12">
            @component('backend.template.components.base.cards.card')
                @slot('cardTitle')
                    Modals
                @endslot
                @slot('cardContent')
                    {{-- Button trigger modal --}}

                    <button class="btn btn-secondary mb-1" type="button" onclick="modalShow('myModal');">
                        Launch demo modal
                    </button>
                    @component('backend.template.components.notifications.modals.modal')
                        @slot('modalName','myModal')
                        @slot('modalTitle')
                            Modal title
                        @endslot
                        @slot('modalContent')
                            <p>One fine body…</p>
                        @endslot
                    @endcomponent

                    <button class="btn btn-secondary mb-1" type="button" data-toggle="modal" data-target="#largeModal">
                        Launch large modal
                    </button>
                    @component('backend.template.components.notifications.modals.modal')
                        @slot('modalSize','large')
                        @slot('modalName','largeModal')
                        @slot('modalTitle')
                            Modal title
                        @endslot
                        @slot('modalContent')
                            <p>One fine body…</p>
                        @endslot
                    @endcomponent

                    <button class="btn btn-secondary mb-1" type="button" data-toggle="modal" data-target="#smallModal">
                        Launch small modal
                    </button>
                    @component('backend.template.components.notifications.modals.modal')
                        @slot('modalSize','small')
                        @slot('modalName','smallModal')
                        @slot('modalTitle')
                            Modal title
                        @endslot
                        @slot('modalContent')
                            <p>One fine body…</p>
                        @endslot
                    @endcomponent

                    <hr>
                    <button class="btn btn-primary mb-1" type="button" data-toggle="modal" data-target="#primaryModal">
                        Primary modal
                    </button>
                    @component('backend.template.components.notifications.modals.modal')
                        @slot('modalTheme','primary')
                        @slot('modalName','primaryModal')
                        @slot('modalTitle')
                            Modal title
                        @endslot
                        @slot('modalContent')
                            <p>One fine body…</p>
                        @endslot
                    @endcomponent

                    <button class="btn btn-success mb-1" type="button" data-toggle="modal" data-target="#successModal">
                        Success modal
                    </button>
                    @component('backend.template.components.notifications.modals.modal')
                        @slot('modalTheme','success')
                        @slot('modalName','successModal')
                        @slot('modalTitle')
                            Modal title
                        @endslot
                        @slot('modalContent')
                            <p>One fine body…</p>
                        @endslot
                    @endcomponent

                    <button class="btn btn-warning mb-1" type="button" data-toggle="modal" data-target="#warningModal">
                        Warning modal
                    </button>
                    @component('backend.template.components.notifications.modals.modal')
                        @slot('modalTheme','warning')
                        @slot('modalName','warningModal')
                        @slot('modalTitle')
                            Modal title
                        @endslot
                        @slot('modalContent')
                            <p>One fine body…</p>
                        @endslot
                    @endcomponent

                    <button class="btn btn-danger mb-1" type="button" data-toggle="modal" data-target="#dangerModal">
                        Danger modal
                    </button>
                    @component('backend.template.components.notifications.modals.modal')
                        @slot('modalTheme','danger')
                        @slot('modalName','dangerModal')
                        @slot('modalTitle')
                            Modal title
                        @endslot
                        @slot('modalContent')
                            <p>One fine body…</p>
                        @endslot
                    @endcomponent

                    <button class="btn btn-info mb-1" type="button" data-toggle="modal" data-target="#infoModal">
                        Info modal
                    </button>
                    @component('backend.template.components.notifications.modals.modal')
                        @slot('modalTheme','info')
                        @slot('modalName','infoModal')
                        @slot('modalTitle')
                            Modal title
                        @endslot
                        @slot('modalContent')
                            <p>One fine body…</p>
                        @endslot
                    @endcomponent

                @endslot
            @endcomponent
        </div>
        <div class="col-12">
            @component('backend.template.components.base.cards.card')
                @slot('cardTitle')
                    Modals JS
                @endslot
                @slot('cardContent')
                    <div class="">
                        <pre>
                            <code>
modalShow('modal class name')
                            </code>
                        </pre>
                    </div>
                    <div class="">
                        <pre>
                            <code>
modalHide('modal class name')
                            </code>
                        </pre>
                    </div>
                @endslot
            @endcomponent
        </div>
    </div>
@endsection
