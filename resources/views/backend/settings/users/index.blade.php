@extends('backend.template.base')
@section('htmlHeadPlugin')
    <?php
    ?>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            @component('backend.template.components.base.cards.card')
                @slot('cardTitle','搜尋')
                @slot('cardContent')
                    <div>
                        <div class="form-row">
                            <div class="col">
                                <div class="input-group flex-nowrap flex-grow-0">
                                    {{-- 搜尋關鍵字 --}}
                                    <?php
                                    $EInput = new \Libraries\element\EInput();
                                    $EInput->setClasses(['flex-grow-3']);
                                    $EInput->setName('filterKeyword');
                                    $EInput->setType('text');
                                    $EInput->setPlaceholder('關鍵字');
                                    $EInput->setValue(request()->input($EInput->getName()));
                                    $EInput->isColored();
                                    $EInput->show();
                                    ?>
                                    {{-- 搜尋欄位 --}}
                                    <?php
                                    $ESelect = new \Libraries\element\ESelect();
                                    $ESelect->setName('filterKeywordField');
                                    $ESelect->setSelectedOption(request()->input($ESelect->getName()));
                                    $ESelect->setFirstOption();
                                    $ESelect->isColored();
                                    $ESelect->show();
                                    ?>
                                </div>
                            </div>
                            {{-- 進階搜尋 --}}
                            <div class="mr-1">
                                <input type="hidden" name="filterMore" id="id_filterMore"
                                       value="<?=request()->input('filterMore')?>">
                                <button class="btn button-outline-gray"
                                        data-toggle="collapse"
                                        data-target=".filterMore"
                                        type="button"
                                        onclick="triggerFilterMore()">
                                    <?php
                                    $EIcon = new \Libraries\element\EIcon();
                                    $EIcon->setIcon('filterMore');
                                    $filterMoreText = $EIcon->getIconText();
                                    $EIcon->show();
                                    ?>
                                    <span class="d-none d-md-inline-block">
                                        {{$filterMoreText}}
                                    </span>
                                </button>
                            </div>
                            {{-- 搜尋 --}}
                            <?php
                            $EButton = new \Libraries\element\EButton();
                            $EButton->setClasses(['btn-outline-info']);
                            $EButton->setType('submit');
                            $EButton->setText('搜尋');
                            $EButton->setLeftIcon('search');
                            $EButton->show();
                            ?>
                        </div>
                        {{-- 進階搜尋內容 --}}
                        <div class="collapse filterMore px-4 mt-3">
                            <div class="row">

                                <div class="col-lg-6 mb-2">
                                    <div class="input-group">
                                        <label class="col-form-label col-4 pl-0">
                                            Select
                                        </label>
                                        <div class="col-lg px-0">
                                            <?php
                                            $ESelect->setName('keySelect');
                                            $ESelect->setOptions([
                                                1 => '1123123123',
                                                2 => '21231231',
                                                3 => '323123',
                                            ]);
                                            $ESelect->isColored();
                                            $ESelect->show();
                                            ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-2">
                                    <div class="input-group">
                                        <label class="col-form-label col-4 pl-0">
                                            Select
                                        </label>
                                        <div class="col-lg px-0">
                                            <?php
                                            $ESelect->setName('keySelect');
                                            $ESelect->setOptions([
                                                1 => '1123123123',
                                                2 => '21231231',
                                                3 => '323123',
                                            ]);
                                            $ESelect->isColored();
                                            $ESelect->show();
                                            ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-2">
                                    <div class="input-group">
                                        <label class="col-form-label col-4 pl-0">
                                            Select
                                        </label>
                                        <div class="col-lg px-0">
                                            <?php
                                            $ESelect->setName('keySelect');
                                            $ESelect->setOptions([
                                                1 => '1123123123',
                                                2 => '21231231',
                                                3 => '323123',
                                            ]);
                                            $ESelect->isColored();
                                            $ESelect->show();
                                            ?>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <script>
                            // 控制 進階搜尋收合
                            function triggerFilterMore() {

                                let filterMoreStatus = $("input[name='filterMore']").val();

                                if (filterMoreStatus === 'true') {
                                    $("input[name='filterMore']").val('');
                                } else {
                                    $("input[name='filterMore']").val('true');
                                }
                            }
                        </script>
                    </div>
                @endslot
            @endcomponent
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
                @endslot
            @endcomponent
        </div>
    </div>
@endsection
