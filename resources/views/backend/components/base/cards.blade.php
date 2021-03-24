@extends('backend.template.base')
@section('content')
    <div class="row">
        <div class="col-sm-6">
            @component('backend.template.components.base.cards.card')
                @slot('cardTitle')
                    Card title
                    <span class="badge badge-success float-right">Success</span>
                    <span class="badge badge-pill badge-danger float-right">42</span>
                @endslot
                @slot('cardContent')
                    Card content<br>
                    Card content<br>
                    Card content<br>
                    Card content<br>
                    Card content<br>
                @endslot
                @slot('cardFooter')
                    Card footer
                @endslot
            @endcomponent
        </div>
        <div class="col-auto">
            @component('backend.template.components.base.cards.card')
                @slot('cardContent')
                    @component('backend.template.components.base.row.markdown')
                        @slot('content')
                            @markdown
                            @verbatim
                                @component('backend.template.components.base.cards.card')
                                    @slot('cardTitle')
                                        Card title
                                        <span class="badge badge-success float-right">Success</span>
                                        <span class="badge badge-pill badge-danger float-right">42</span>
                                    @endslot
                                    @slot('cardContent')
                                        Card content<br>
                                        Card content<br>
                                        Card content<br>
                                        Card content<br>
                                        Card content<br>
                                    @endslot
                                    @slot('cardFooter')
                                        Card footer
                                    @endslot
                                @endcomponent
                            @endverbatim
                            @endmarkdown
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            @component('backend.template.components.base.cards.card')
                @slot('cardBorder','primary')
                @slot('cardTitle')
                    Card outline
                @endslot
                @slot('cardContent')
                    primary
                @endslot
                @slot('cardFooter')
                    Card footer
                @endslot
            @endcomponent
        </div>
        <div class="col-auto">
            @component('backend.template.components.base.cards.card')
                @slot('cardContent')
                    @component('backend.template.components.base.row.markdown')
                        @slot('content')
                            @markdown
                            @verbatim
                                @component('backend.template.components.base.cards.card')
                                    @slot('cardBorder','primary')
                                    @slot('cardTitle')
                                        Card outline
                                    @endslot
                                    @slot('cardContent')
                                        primary
                                    @endslot
                                    @slot('cardFooter')
                                        Card footer
                                    @endslot
                                @endcomponent
                            @endverbatim
                            @endmarkdown
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            @component('backend.template.components.base.cards.card')
                @slot('cardAccent','primary')
                @slot('cardTitle')
                    Card with accent
                @endslot
                @slot('cardContent')
                    primary
                @endslot
                @slot('cardFooter')
                    Card footer
                @endslot
            @endcomponent
        </div>
        <div class="col-auto">
            @component('backend.template.components.base.cards.card')
                @slot('cardContent')
                    @component('backend.template.components.base.row.markdown')
                        @slot('content')
                            @markdown
                            @verbatim
                                @component('backend.template.components.base.cards.card')
                                    @slot('cardAccent','primary')
                                    @slot('cardTitle')
                                        Card with accent
                                    @endslot
                                    @slot('cardContent')
                                        primary
                                    @endslot
                                    @slot('cardFooter')
                                        Card footer
                                    @endslot
                                @endcomponent
                            @endverbatim
                            @endmarkdown
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            @component('backend.template.components.base.cards.card')
                @slot('cardBorder','secondary')
                @slot('cardTitle')
                    Card outline
                @endslot
                @slot('cardContent')
                    secondary
                @endslot
                @slot('cardFooter')
                    Card footer
                @endslot
            @endcomponent
        </div>
        <div class="col-auto">
            @component('backend.template.components.base.cards.card')
                @slot('cardContent')
                    @component('backend.template.components.base.row.markdown')
                        @slot('content')
                            @markdown
                            @verbatim
                                @component('backend.template.components.base.cards.card')
                                    @slot('cardBorder','secondary')
                                    @slot('cardTitle')
                                        Card outline
                                    @endslot
                                    @slot('cardContent')
                                        secondary
                                    @endslot
                                    @slot('cardFooter')
                                        Card footer
                                    @endslot
                                @endcomponent
                            @endverbatim
                            @endmarkdown
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            @component('backend.template.components.base.cards.card')
                @slot('cardAccent','secondary')
                @slot('cardTitle')
                    Card with accent
                @endslot
                @slot('cardContent')
                    secondary
                @endslot
                @slot('cardFooter')
                    Card footer
                @endslot
            @endcomponent
        </div>
        <div class="col-auto">
            @component('backend.template.components.base.cards.card')
                @slot('cardContent')
                    @component('backend.template.components.base.row.markdown')
                        @slot('content')
                            @markdown
                            @verbatim
                                @component('backend.template.components.base.cards.card')
                                    @slot('cardAccent','secondary')
                                    @slot('cardTitle')
                                        Card with accent
                                    @endslot
                                    @slot('cardContent')
                                        secondary
                                    @endslot
                                    @slot('cardFooter')
                                        Card footer
                                    @endslot
                                @endcomponent
                            @endverbatim
                            @endmarkdown
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            @component('backend.template.components.base.cards.card')
                @slot('cardBorder','success')
                @slot('cardTitle')
                    Card outline
                @endslot
                @slot('cardContent')
                    success
                @endslot
                @slot('cardFooter')
                    Card footer
                @endslot
            @endcomponent
        </div>
        <div class="col-auto">
            @component('backend.template.components.base.cards.card')
                @slot('cardContent')
                    @component('backend.template.components.base.row.markdown')
                        @slot('content')
                            @markdown
                            @verbatim
                                @component('backend.template.components.base.cards.card')
                                    @slot('cardBorder','success')
                                    @slot('cardTitle')
                                        Card outline
                                    @endslot
                                    @slot('cardContent')
                                        success
                                    @endslot
                                    @slot('cardFooter')
                                        Card footer
                                    @endslot
                                @endcomponent
                            @endverbatim
                            @endmarkdown
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            @component('backend.template.components.base.cards.card')
                @slot('cardAccent','success')
                @slot('cardTitle')
                    Card with accent
                @endslot
                @slot('cardContent')
                    success
                @endslot
                @slot('cardFooter')
                    Card footer
                @endslot
            @endcomponent
        </div>
        <div class="col-auto">
            @component('backend.template.components.base.cards.card')
                @slot('cardContent')
                    @component('backend.template.components.base.row.markdown')
                        @slot('content')
                            @markdown
                            @verbatim
                                @component('backend.template.components.base.cards.card')
                                    @slot('cardAccent','success')
                                    @slot('cardTitle')
                                        Card with accent
                                    @endslot
                                    @slot('cardContent')
                                        success
                                    @endslot
                                    @slot('cardFooter')
                                        Card footer
                                    @endslot
                                @endcomponent
                            @endverbatim
                            @endmarkdown
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            @component('backend.template.components.base.cards.card')
                @slot('cardBorder','info')
                @slot('cardTitle')
                    Card outline
                @endslot
                @slot('cardContent')
                    info
                @endslot
                @slot('cardFooter')
                    Card footer
                @endslot
            @endcomponent
        </div>
        <div class="col-auto">
            @component('backend.template.components.base.cards.card')
                @slot('cardContent')
                    @component('backend.template.components.base.row.markdown')
                        @slot('content')
                            @markdown
                            @verbatim
                                @component('backend.template.components.base.cards.card')
                                    @slot('cardBorder','info')
                                    @slot('cardTitle')
                                        Card outline
                                    @endslot
                                    @slot('cardContent')
                                        info
                                    @endslot
                                    @slot('cardFooter')
                                        Card footer
                                    @endslot
                                @endcomponent
                            @endverbatim
                            @endmarkdown
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            @component('backend.template.components.base.cards.card')
                @slot('cardAccent','info')
                @slot('cardTitle')
                    Card with accent
                @endslot
                @slot('cardContent')
                    info
                @endslot
                @slot('cardFooter')
                    Card footer
                @endslot
            @endcomponent
        </div>
        <div class="col-auto">
            @component('backend.template.components.base.cards.card')
                @slot('cardContent')
                    @component('backend.template.components.base.row.markdown')
                        @slot('content')
                            @markdown
                            @verbatim
                                @component('backend.template.components.base.cards.card')
                                    @slot('cardAccent','info')
                                    @slot('cardTitle')
                                        Card with accent
                                    @endslot
                                    @slot('cardContent')
                                        info
                                    @endslot
                                    @slot('cardFooter')
                                        Card footer
                                    @endslot
                                @endcomponent
                            @endverbatim
                            @endmarkdown
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            @component('backend.template.components.base.cards.card')
                @slot('cardBorder','warning')
                @slot('cardTitle')
                    Card outline
                @endslot
                @slot('cardContent')
                    warning
                @endslot
                @slot('cardFooter')
                    Card footer
                @endslot
            @endcomponent
        </div>
        <div class="col-auto">
            @component('backend.template.components.base.cards.card')
                @slot('cardContent')
                    @component('backend.template.components.base.row.markdown')
                        @slot('content')
                            @markdown
                            @verbatim
                                @component('backend.template.components.base.cards.card')
                                    @slot('cardBorder','warning')
                                    @slot('cardTitle')
                                        Card outline
                                    @endslot
                                    @slot('cardContent')
                                        warning
                                    @endslot
                                    @slot('cardFooter')
                                        Card footer
                                    @endslot
                                @endcomponent
                            @endverbatim
                            @endmarkdown
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            @component('backend.template.components.base.cards.card')
                @slot('cardAccent','warning')
                @slot('cardTitle')
                    Card with accent
                @endslot
                @slot('cardContent')
                    warning
                @endslot
                @slot('cardFooter')
                    Card footer
                @endslot
            @endcomponent
        </div>
        <div class="col-auto">
            @component('backend.template.components.base.cards.card')
                @slot('cardContent')
                    @component('backend.template.components.base.row.markdown')
                        @slot('content')
                            @markdown
                            @verbatim
                                @component('backend.template.components.base.cards.card')
                                    @slot('cardAccent','warning')
                                    @slot('cardTitle')
                                        Card with accent
                                    @endslot
                                    @slot('cardContent')
                                        warning
                                    @endslot
                                    @slot('cardFooter')
                                        Card footer
                                    @endslot
                                @endcomponent
                            @endverbatim
                            @endmarkdown
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            @component('backend.template.components.base.cards.card')
                @slot('cardBorder','danger')
                @slot('cardTitle')
                    Card outline
                @endslot
                @slot('cardContent')
                    danger
                @endslot
                @slot('cardFooter')
                    Card footer
                @endslot
            @endcomponent
        </div>
        <div class="col-auto">
            @component('backend.template.components.base.cards.card')
                @slot('cardContent')
                    @component('backend.template.components.base.row.markdown')
                        @slot('content')
                            @markdown
                            @verbatim
                                @component('backend.template.components.base.cards.card')
                                    @slot('cardBorder','danger')
                                    @slot('cardTitle')
                                        Card outline
                                    @endslot
                                    @slot('cardContent')
                                        danger
                                    @endslot
                                    @slot('cardFooter')
                                        Card footer
                                    @endslot
                                @endcomponent
                            @endverbatim
                            @endmarkdown
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            @component('backend.template.components.base.cards.card')
                @slot('cardAccent','danger')
                @slot('cardTitle')
                    Card with accent
                @endslot
                @slot('cardContent')
                    danger
                @endslot
                @slot('cardFooter')
                    Card footer
                @endslot
            @endcomponent
        </div>
        <div class="col-auto">
            @component('backend.template.components.base.cards.card')
                @slot('cardContent')
                    @component('backend.template.components.base.row.markdown')
                        @slot('content')
                            @markdown
                            @verbatim
                                @component('backend.template.components.base.cards.card')
                                    @slot('cardAccent','danger')
                                    @slot('cardTitle')
                                        Card with accent
                                    @endslot
                                    @slot('cardContent')
                                        danger
                                    @endslot
                                    @slot('cardFooter')
                                        Card footer
                                    @endslot
                                @endcomponent
                            @endverbatim
                            @endmarkdown
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent
        </div>
    </div>
@endsection
