<?php
/* 進階搜尋內容 模組 */
$filterMoreLabel = $filterMoreLabel ?? null;
$filterMoreContent = $filterMoreContent ?? null;
?>
<div class="col-lg-6 mb-2 px-2">
    <div class="form-group m-0">
        <label class="m-0">
            {!! $filterMoreLabel !!}
        </label>
        <div class="col-form-label p-0">
            {!! $filterMoreContent !!}
        </div>
    </div>
</div>
