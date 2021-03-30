@extends('backend.template.base')

@section('htmlHeadPlugin')
    <?php
    $User = new App\Models\User;
    $EPagination = new Libraries\element\EPagination;
    $EPaginationCountInfo = new Libraries\element\EPaginationCountInfo();
    ?>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-6">
            @component('backend.template.components.base.cards.card')
                @slot('cardTitle')
                    pagination
                @endslot
                @slot('cardContent')
                    <?php
                    $users = $User->paginate(1);
                    $EPagination->setPagination($users);
                    $EPagination->show();
                    ?>
                @endslot
            @endcomponent
            @component('backend.template.components.base.cards.card')
                @slot('cardTitle')
                    pagination count info
                @endslot
                @slot('cardContent')
                    <?php
                    $EPaginationCountInfo->setPagination($users);
                    $EPaginationCountInfo->show();
                    ?>
                @endslot
            @endcomponent
        </div>
    </div>
@endsection
