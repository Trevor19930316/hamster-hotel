<?php
$totalRowsCount = $totalRowsCount ?? null;
$pageRowsCount = $pageRowsCount ?? null;
$totalPageCount = $totalPageCount ?? null;
?>
<div class="text-center text-md-left d-flex">
    <span class="p-2">{{__('pagination.page_data_count', ['count' => $pageRowsCount])}}</span>
    <span class="p-2">|</span>
    <span class="p-2">{{__('pagination.total_page', ['count' => $totalPageCount])}}</span>
    <span class="p-2">|</span>
    <span class="p-2">{{__('pagination.total_data_count', ['count' => $totalRowsCount])}}</span>
</div>
