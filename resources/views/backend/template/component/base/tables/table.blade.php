<?php
// table 模組
/* table 類型 */
$tableType = $tableType ?? 'default'; // Striped | Condensed | Bordered | Combined
$tableTypeClass = null;
if ($tableType == 'Striped') {
    $tableTypeClass = 'table-striped';
} elseif ($tableType == 'Condensed') {
    $tableTypeClass = 'table-sm';
} elseif ($tableType == 'Bordered') {
    $tableTypeClass = 'table-bordered';
} elseif ($tableType == 'Combined') {
    $tableTypeClass = 'table-bordered table-striped table-sm';
}
/* table thead */
$tableThead = $tableThead ?? null;
/* table tbody */
$tableTbody = $tableTbody ?? null;
?>
<table class="table table-responsive-sm {{$tableTypeClass}}">
    <thead>
    {!! $tableThead !!}
    </thead>
    <tbody>
    {!! $tableTbody !!}
    </tbody>
</table>
