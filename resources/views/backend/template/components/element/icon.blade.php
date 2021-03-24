<?php
$icon = $icon ?? null;
$title = $title ?? null;
$dataAttributes = $dataAttributes ?? [];
?>
<i class="{!! $icon !!}"
@if ($dataAttributes)
    @foreach($dataAttributes as $dataName => $dataValue)
        {!! $dataName !!}="{!! $dataValue !!}"
    @endforeach
@endif
title="{{$title}}"
>
</i>
