<?php
$divClass = $divClass ?? null;
$imageClass = $imageClass ?? null;
$imageData = $imageData ?? '#';

$width = $width ?? null;
$height = $height ?? null;
?>
<div class="elementImage {!! join(' ', $divClass) !!}">
    <a href="{!! $imageData !!}" target="_blank">
        <img
            class="{!! join(' ', $imageClass) !!}"
            src="{!! $imageData !!}"
            {!! !is_null($width) ? 'width="'.$width.'"': null !!}
            {!! !is_null($height) ? 'height="'.$height.'"' : null !!}
            alt="image">
    </a>
</div>
