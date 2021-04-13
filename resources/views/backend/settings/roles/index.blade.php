@extends('backend.template.base')
@section('htmlHeadPlugin')
    <?php
    $ECheckbox = new Libraries\element\ECheckbox();
    $EPagination = new Libraries\element\EPagination;
    ?>
@endsection
@section('content')
    {{-- form 模組 --}}
    @component('backend.template.components.base.form')
        @slot('formMethod','get')
        @slot('formDisabledNullElements','true')
        @slot('formValidation','false')
        @slot('formContent')
            {{-- 搜尋 模組 --}}
            @component('backend.template.components.base.filter.filter')
            @endcomponent
            <div class="row">
                <div class="col-sm-12">
                    @component('backend.template.components.base.cards.card')
                        @slot('cardContent')
                            <div class="mb-3 text-right">
                                @can('roles.create')
                                    <?php
                                    $EButtonA = new \Libraries\element\EButtonA();
                                    $EButtonA->setClass('btn-outline-dark');
                                    $EButtonA->setIcon('plus');
                                    $EButtonA->setLink(route('backend.settings.roles.create'));
                                    $EButtonA->show();
                                    ?>
                                @endcan
                            </div>
                            @component('backend.template.components.base.tables.table')
                                @slot('tableThead')
                                    <tr>
                                        <th class="checkbox">
                                            <?php
                                            $ECheckbox->isCheckAll();
                                            $ECheckbox->show();
                                            ?>
                                        </th>
                                        <th class="fit-content">id</th>
                                        <th>名稱</th>
                                        <th>
                                            @can('roles.create')
                                            @endcan
                                            @role('Super-Admin')
                                            @endrole
                                        </th>
                                    </tr>
                                @endslot
                                @slot('tableTbody')
                                    @foreach($roles as $role)
                                        <tr>
                                            <td class="checkbox">
                                                <?php
                                                $ECheckbox->isCheckId($role->id);
                                                $ECheckbox->show();
                                                ?>
                                            </td>
                                            <td class="fit-content">
                                                {{$role->id}}
                                            </td>
                                            <td>
                                                <a href="{{route('backend.settings.roles.show',['roles_id'=>$role->id])}}">
                                                    {{$role->name}}
                                                </a>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endslot
                            @endcomponent
                            <?php
                            $EPagination->setPagination($roles);
                            $EPagination->show();
                            ?>
                        @endslot
                    @endcomponent
                </div>
            </div>
        @endslot
    @endcomponent
@endsection
