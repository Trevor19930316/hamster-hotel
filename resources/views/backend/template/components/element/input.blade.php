<?php
$name = $name ?? null;
$id = $id ?? null;
$class = $class ?? ['form-control'];
$value = $value ?? null;
$onclick = $onclick ?? null;
$onchange = $onchange ?? null;
$autocomplete = $autocomplete ?? 'on';
$type = $type ?? 'text';
$max = $max ?? null;
$min = $min ?? null;
$maxlength = $maxlength ?? null;
$minlength = $minlength ?? null;
$placeholder = $placeholder ?? null;
$onkeyup = $onkeyup ?? null;
$onkeypress = $onkeypress ?? null;
$disable = $disable ?? false;
$required = $required ?? false;
$readonly = $readonly ?? false;
$textNumber = $textNumber ?? false;
?>
<input
    class="{!! join(' ', $class) !!}"
    autocomplete="{!! $autocomplete !!}"
    {!! !is_null($name) ? 'name="'.$name.'"' : null !!}
    {!! !is_null($id) ? 'id="'.$id.'"' : null !!}
    {!! !is_null($value) ? 'value="'.$value.'"' : null !!}
    {!! !is_null($type) ? 'type="'.$type.'"' : null !!}
    {!! !is_null($max) ? 'max="'.$max.'"' : null !!}
    {!! !is_null($min) ? 'min="'.$min.'"' : null !!}
    {!! !is_null($maxlength) ? 'maxlength="'.$maxlength.'"' : null !!}
    {!! !is_null($minlength) ? 'minlength="'.$minlength.'"' : null !!}
    {!! !is_null($placeholder) ? 'placeholder="'.$placeholder.'"' : null !!}
    {!! !is_null($onclick) ? 'onclick="'.$onclick.'"' : null !!}
    {!! !is_null($onchange) ? 'onchange="'.$onchange.'"' : null !!}
    {!! !is_null($onkeyup) ? 'onkeyup="'.$onkeyup.'"' : null !!}
    {!! !is_null($onkeypress) ? 'onkeypress="'.$onkeypress.'"' : null !!}
    {!! $disable ? 'disable' : null !!}
    {!! $required ? 'required' : null !!}
    {!! $readonly ? 'readonly' : null !!}
    @if($textNumber)
    onkeyup="value=value.replace(/[^\d]/g,'')"
    pattern="\d*"
    @endif
>
