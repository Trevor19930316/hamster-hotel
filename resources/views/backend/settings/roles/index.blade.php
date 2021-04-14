@extends('backend.template.base')
@section('htmlHeadPlugin')
    <?php
    $EButton = new Libraries\element\EButton();
    $EButtonA = new Libraries\element\EButtonA();
    $ECheckbox = new Libraries\element\ECheckbox();
    $EIcon = new Libraries\element\EIcon();
    $EInput = new Libraries\element\EInput();
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
                                {{-- 新增 --}}
                                @can('roles.create')
                                    <?php
                                    $EButtonA->setClass('btn-outline-dark');
                                    $EButtonA->setIcon('plus');
                                    $EButtonA->setLink(route('backend.settings.roles.create'));
                                    $EButtonA->show();
                                    ?>
                                @endcan
                                {{-- todo 刪除 --}}
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
                                        @can('roles.update')
                                            <th class="sort">
                                                <?php
                                                $link = null;
                                                $EButton->setSort($link);
                                                $EButton->show();
                                                ?>
                                            </th>
                                        @endcan
                                        @role('Super-Admin')
                                        @endrole
                                        <th class="maintain">
                                            操作
                                        </th>
                                        <th class="fit-content">id</th>
                                        <th>名稱</th>
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
                                            @can('roles.update')
                                                <td class="sort">
                                                    <?php
                                                    $EInput->setSort($role->id, $role->hierarchy);
                                                    $EInput->show();
                                                    ?>
                                                </td>
                                            @endcan
                                            <td class="maintain">
                                                @if($role->name!='Super-Admin')
                                                    {{-- 編輯 --}}
                                                    <?php
                                                    $link = route('backend.settings.roles.edit', ['roles_id' => $role->id]);
                                                    $EButtonA->setIcon('pen');
                                                    $EButtonA->setText(null);
                                                    $EButtonA->setClasses(['btnIcon', 'btnIconGray']);
                                                    $EButtonA->show();
                                                    ?>
                                                    {{-- 刪除 --}}
                                                    <?php
                                                    $EButtonA->setIcon('trash');
                                                    $EButtonA->setText(null);
                                                    $EButtonA->setClasses(['btnIcon', 'btnIconGray']);
                                                    //$EButtonA->setLink(route('backend.settings.roles.create'));
                                                    $EButtonA->show();
                                                    ?>
                                                @endif
                                            </td>
                                            <td class="fit-content">
                                                {{$role->id}}
                                            </td>
                                            <td>
                                                <a href="{{route('backend.settings.roles.show',['roles_id'=>$role->id])}}">
                                                    {{$role->name}}
                                                </a>
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
