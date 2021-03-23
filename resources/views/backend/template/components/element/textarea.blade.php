<?php
$name = $name ?? null;
$id = $id ?? null;
$class = $class ?? ['form-control'];
$cols = $cols ?? 100;
$rows = $rows ?? 5;
$maxlength = $maxlength ?? null;
$minlength = $minlength ?? null;
$placeholder = $placeholder ?? null;
$onkeyup = $onkeyup ?? null;
$onkeydown = $onkeydown ?? null;
$disabled = $disabled ?? false;
$required = $required ?? false;
$readonly = $readonly ?? false;
$text = $text ?? null;
?>
<textarea
    class="{!! join(' ', $class) !!}"
    {!! !is_null($name) ? 'name="'.$name.'"' : null !!}
    {!! !is_null($id) ? 'id="'.$id.'"' : null !!}
    {!! !is_null($cols) ? 'cols="'.$cols.'"' : null !!}
    {!! !is_null($rows) ? 'rows="'.$rows.'"' : null !!}
    {!! !is_null($maxlength) ? 'maxlength="'.$maxlength.'"' : null !!}
    {!! !is_null($minlength) ? 'minlength="'.$minlength.'"' : null !!}
    {!! !is_null($placeholder) ? 'placeholder="'.$placeholder.'"' : null !!}
    {!! !is_null($onkeyup) ? 'onkeyup="'.$onkeyup.'"' : null !!}
    {!! !is_null($onkeydown) ? 'onkeydown="'.$onkeydown.'"' : null !!}
    {!! $disabled ? 'disabled' : null !!}
    {!! $required ? 'required' : null !!}
    {!! $readonly ? 'readonly' : null !!}
>@if(!is_null($text)){{$text}}@endif
</textarea>
