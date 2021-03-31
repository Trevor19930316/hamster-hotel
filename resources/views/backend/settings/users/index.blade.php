@extends('backend.template.base')
@section('htmlHeadPlugin')
    <?php
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
                <?php
                $filterKeywordField = [
                    'name' => '名稱',
                    'email' => 'Email',
                ];
                ?>
                @slot('filterKeywordField',$filterKeywordField)
            @endcomponent
            <div class="row">
                <div class="col-sm-12">
                    @component('backend.template.components.base.cards.card')
                        @slot('cardTitle','使用者')
                        @slot('cardContent')
                            @component('backend.template.components.base.tables.table')
                                @slot('tableThead')
                                    <tr>
                                        <th>id</th>
                                        <th>名稱</th>
                                        <th>Email</th>
                                        <th>
                                            @can('users.create')
                                            @endcan
                                            @role('Super-Admin')
                                            @endrole
                                        </th>
                                    </tr>
                                @endslot
                                @slot('tableTbody')
                                    @foreach($users as $user)
                                        <tr>
                                            <td>
                                                {{$user->id}}
                                            </td>
                                            <td>
                                                {{$user->name}}
                                            </td>
                                            <td>
                                                {{$user->email}}
                                            </td>
                                            <td>

                                            </td>
                                        </tr>
                                    @endforeach
                                @endslot
                            @endcomponent
                            <?php
                            $EPagination->setPagination($users);
                            $EPagination->show();
                            ?>
                        @endslot
                    @endcomponent
                </div>
            </div>
        @endslot
    @endcomponent
@endsection
