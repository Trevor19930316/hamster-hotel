<?php
$class = $class ?? ['btn'];
$icon = $icon ?? null;
$text = $text ?? null;
$link = $link ?? '#';
$target = $target ?? null;
$onclick = $onclick ?? null;
$dataAttributes = $dataAttributes ?? [];
$disabled = $disabled ?? false;
?>
<a class="{!! join(' ', $class) !!}"
   @if(!empty($dataAttributes) && is_array($dataAttributes))
   @foreach($dataAttributes as $attributeKey => $attributeValue)
   {!!$attributeKey . '="' . $attributeValue . '"'!!}
   @endforeach
   @endif
   {!! !is_null($target) ? 'target="' . $target . '"' : null !!}
   {!! !is_null($text) ? 'title="' . $text . '"' : null !!}
   {!! !is_null($onclick) ? 'onclick="' . $onclick . '"' : null !!}
   href="{!! $link !!}">
    @if(!is_null($icon))
        <span class="d-inline-block">{!! $icon !!}</span>
    @endif
    @if(!is_null($text))
        <span class="d-none d-md-inline-block">{!! $text !!}</span>
    @endif
    {!! $disabled ? 'disabled' : null !!}
</a>
