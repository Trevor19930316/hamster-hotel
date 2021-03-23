<?php
$name = $name ?? null;
$id = $id ?? null;
$class = $class ?? ['btn'];
$type = $type ?? 'button';
$icon = $icon ?? null;
$iconPosition = $iconPosition ?? 'left';
$onclick = $onclick ?? null;
$disable = $disable ?? false;
$textResponsive = $textResponsive ?? true;
?>
<button
    class="{!! join(' ', $class) !!}"
    {!! !is_null($name) ? 'name="'.$name.'"' : null !!}
    {!! !is_null($id) ? 'id="'.$id.'"' : null !!}
    {!! !is_null($type) ? 'type="'.$type.'"' : null !!}
    {!! !is_null($onclick) ? 'onclick="'.$onclick.'"' : null !!}
    {!! $disable ? 'disable' : null !!}
>
    @if(!is_null($icon))
        @if($iconPosition=='left')
            {!! $icon !!}
        @endif
        {{-- 手機板隱藏文字 --}}
        <div class="<?=$textResponsive ? 'd-none d-md-inline-block' : 'd-inline-block'?>">
            {!! $text !!}
        </div>
        @if($iconPosition=='right')
            {!! $icon !!}
        @endif
    @else
        {!! $text !!}
    @endif
</button>
