<?php
$divClass = $divClass ?? null;
$imageClass = $imageClass ?? null;
$imageData = $imageData ?? '#';

$divWidth = $divWidth ?? null;
$divHeight = $divHeight ?? null;
$divStyle = null;
$width = $width ?? null;
$height = $height ?? null;

if (!is_null($divWidth) || !is_null($divHeight)) {
    $divStyle = "width:$divWidth;height:$divHeight;";
}
?>
<div class="elementImage {!! join(' ', $divClass) !!}" style="{!! $divStyle !!}">
    <a href="{!! $imageData !!}" target="_blank">
        <img
            class="{!! join(' ', $imageClass) !!}"
            src="{!! $imageData !!}"
            {!! !is_null($width) ? 'width="'.$width.'"': null !!}
            {!! !is_null($height) ? 'height="'.$height.'"' : null !!}
            alt="image">
    </a>
</div>
