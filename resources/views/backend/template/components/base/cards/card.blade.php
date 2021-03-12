<?php
// card 模組
/* card class add */
$cardClassAdd = $cardClassAdd ?? null;
/* card border */
// primary | secondary | success | info | warning | danger
$cardBorder = isset($cardBorder) ? 'border-' . $cardBorder : null;
/* card accent */
// primary | secondary | success | info | warning | danger
$cardAccent = isset($cardAccent) ? 'card-accent-' . $cardAccent : null;
/* card Title */
$cardTitle = $cardTitle ?? null;
/* card Content */
$cardContent = $cardContent ?? null;
/* card Footer */
$cardFooter = $cardFooter ?? null;
?>
<div class="card {{$cardBorder}} {{$cardAccent}} {{$cardClassAdd}}">
    @if (!is_null($cardTitle))
        <div class="card-header">
            {!! $cardTitle !!}
        </div>
    @endif
    <div class="card-body">
        {!! $cardContent !!}
    </div>
    @if (!is_null($cardFooter))
        <div class="card-footer">
            {!! $cardFooter !!}
        </div>
    @endif
</div>
