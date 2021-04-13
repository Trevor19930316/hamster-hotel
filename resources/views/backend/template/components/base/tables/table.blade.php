<?php
// table 模組
/* table 類型 */
// Striped | Condensed | Bordered | Combined
$tableType = $tableType ?? 'default';
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
<table class="table table-responsive-sm table-hover {{$tableTypeClass}}">
    <thead>
    {!! $tableThead !!}
    </thead>
    <tbody>
    {!! $tableTbody !!}
    </tbody>
</table>
