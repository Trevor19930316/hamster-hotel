<?php
$icon = $icon ?? null;
$text = $text ?? null;
$dataAttributes = $dataAttributes ?? [];
$showText = $showText ?? true;
?>
<i class="{!! $icon !!}"
@if ($dataAttributes)
    @foreach($dataAttributes as $dataName => $dataValue)
        {!! $dataName !!}="{!! $dataValue !!}"
    @endforeach
@endif
@if($showText)
    title="{{$text}}"
@endif
>
</i>
