<?php
$EButton = new \Libraries\element\EButton();
$EIcon = new \Libraries\element\EIcon();
$EInput = new \Libraries\element\EInput();
$page = $page ?? 1;
$lastPage = $lastPage ?? 1;
$previousPage = $previousPage ?? 1;
$nextPage = $nextPage ?? 1;
?>
<div class="d-flex align-items-center">
    <?php
    // 第一頁
    $EIcon->setIcon('angle-double-left');
    $iconText = $EIcon->getIconText();
    $icon = $EIcon->view();
    $EButton->setType('button');
    $EButton->setOnclick('paginationChangePage($(this.form), 1)');
    $EButton->setText($icon);
    $EButton->setTooltip($iconText);
    $page == 1 ? $EButton->isDisabled() : null;
    $EButton->show();
    ?>
    <?php
    // 前一頁
    $EIcon->setIcon('angle-left');
    $iconText = $EIcon->getIconText();
    $icon = $EIcon->view();
    $EButton->setType('button');
    $EButton->setOnclick('paginationChangePage($(this.form), ' . $previousPage . ')');
    $EButton->setText($icon);
    $EButton->setTooltip($iconText);
    $page == 1 ? $EButton->isDisabled() : null;
    $EButton->show();
    ?>
    <div class="d-flex align-items-center mx-2">
        <?php
        $EInput->setClasses(['text-center', 'w-auto', 'mx-2']);
        $EInput->setName('page');
        $EInput->setValue($page);
        $EInput->setType('text');
        $EInput->setOnchange('paginationChangePage($(this.form), this.value)');
        $EInput->isTextNumber();
        $lastPage == 1 ? $EInput->isDisabled() : null;
        $EInput->show();
        ?>
        <span> / {{$lastPage}}</span>
    </div>
    <?php
    // 下一頁
    $EIcon->setIcon('angle-right');
    $iconText = $EIcon->getIconText();
    $icon = $EIcon->view();
    $EButton->setType('button');
    $EButton->setOnclick('paginationChangePage($(this.form), ' . $nextPage . ')');
    $EButton->setText($icon);
    $EButton->setTooltip($iconText);
    $page == $lastPage ? $EButton->isDisabled() : null;
    $EButton->show();
    ?>
    <?php
    // 最終頁
    $EIcon->setIcon('angle-double-right');
    $iconText = $EIcon->getIconText();
    $icon = $EIcon->view();
    $EButton->setType('button');
    $EButton->setOnclick('paginationChangePage($(this.form), ' . $lastPage . ')');
    $EButton->setText($icon);
    $EButton->setTooltip($iconText);
    $page == $lastPage ? $EButton->isDisabled() : null;
    $EButton->show();
    ?>
</div>
