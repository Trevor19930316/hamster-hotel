<?php
/* 搜尋 模組 */
$EButton = new \Libraries\element\EButton();
$EIcon = new \Libraries\element\EIcon();
$EInput = new \Libraries\element\EInput();
$ESelect = new \Libraries\element\ESelect();
// 搜尋 name
$filterName = $filterName ?? null;
$filterKeywordFieldName = !is_null($filterName) ? 'filterKeywordField_' . $filterName : 'filterKeywordField';
$filterKeywordInputName = !is_null($filterName) ? 'filterKeyword_' . $filterName : 'filterKeyword';
$filterMoreName = !is_null($filterName) ? 'filterMore_' . $filterName : 'filterMore';
// 搜尋欄位選項 陣列
$filterKeywordField = $filterKeywordField ?? null;
// 進階搜尋內容
$filterMoreContent = $filterMoreContent ?? null;
?>
<div class="mb-3">
    <div class="form-row">
        <div class="col">
            <div class="input-group flex-nowrap flex-grow-0">
                {{-- 搜尋關鍵字 --}}
                <?php
                $EInput->setClasses(['flex-grow-3']);
                $EInput->setName($filterKeywordInputName);
                $EInput->setType('text');
                $EInput->setPlaceholder('搜尋 ...');
                $EInput->setValue(request()->input($EInput->getName()));
                $EInput->isColored();
                $EInput->show();
                ?>
                {{-- 搜尋欄位 --}}
                <?php
                if (!is_null($filterKeywordField)) {
                    $ESelect->setName($filterKeywordFieldName);
                    $ESelect->setFirstOption('','-- 搜尋欄位 --');
                    $ESelect->setOptions($filterKeywordField);
                    $ESelect->setSelectedOption(request()->input($ESelect->getName()));
                    $ESelect->isColored();
                    $ESelect->show();
                }
                ?>
            </div>
        </div>
        @if(!is_null($filterMoreContent))
            {{-- 進階搜尋 --}}
            <div class="mr-1">
                <input type="hidden" name="{{$filterMoreName}}" id="id_{{$filterMoreName}}"
                       value="<?=request()->input($filterMoreName)?>">
                <button class="btn button-outline-gray"
                        data-toggle="collapse"
                        data-target=".{{$filterMoreName}}"
                        type="button"
                        onclick="triggerFilterMore()">
                    <?php
                    $EIcon->setIcon('filterMore');
                    $filterMoreText = $EIcon->getIconText();
                    $EIcon->show();
                    ?>
                    <span class="d-none d-md-inline-block">
                    {{$filterMoreText}}
                </span>
                </button>
            </div>
        @endif
        {{-- 搜尋 --}}
        <?php
        $EButton->setClasses(['btn-outline-info']);
        $EButton->setType('submit');
        $EButton->setText('搜尋');
        $EButton->setLeftIcon('search');
        $EButton->show();
        ?>
    </div>
    @if(!is_null($filterMoreContent))
        {{-- 進階搜尋內容 --}}
        <div class="collapse {{$filterMoreName}} px-3 mt-2">
            <div class="row">
                <?=$filterMoreContent?>
            </div>
        </div>
        <script>
            // 控制 進階搜尋收合
            function triggerFilterMore() {

                let filterMoreStatus = $("input[name='{{$filterMoreName}}']").val();

                if (filterMoreStatus === 'true') {
                    $("input[name='{{$filterMoreName}}']").val('');
                } else {
                    $("input[name='{{$filterMoreName}}']").val('true');
                }
            }
        </script>
    @endif
</div>
