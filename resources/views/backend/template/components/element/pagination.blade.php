<?php
use Libraries\element\EInput;
$lastPage = $lastPage ?? 1;
$currentPage = $currentPage ?? 1;
$previousPage = $previousPage ?? 1;
$nextPage = $nextPage ?? 1;
?>
<div class="pagination d-flex align-items-center">
    <span class="page-item ">
        <span class="page-link text-info" onclick="paginationChangePage($(this.form), 1)">First</span>
    </span>
    <span class="page-item">
        <span class="page-link text-info" onclick="paginationChangePage($(this.form), {{$previousPage}})">Prev</span>
    </span>
    <span class="page-item">
        <?php
        $EInput = new EInput();
        $EInput->setClass('w-auto text-center');
        $EInput->setName('currentPage');
        $EInput->setValue($currentPage);
        $EInput->setType('number');
        $EInput->isTextNumber();
        $EInput->show();
        ?>
    </span>
    <span class="page-item">
        <span class="page-link text-info" onclick="paginationChangePage($(this.form), {{$nextPage}})">Next</span>
    </span>
    <span class="page-item">
        <span class="page-link text-info" onclick="paginationChangePage($(this.form), {{$lastPage}})">Last</span>
    </span>
</div>
