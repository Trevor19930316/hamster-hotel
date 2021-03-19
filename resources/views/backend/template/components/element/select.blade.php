<?php
$name = $name ?? null;
$id = $id ?? null;
$class = $class ?? ['form-control'];
$size = $size ?? 1;
$options = $options ?? [];
$firstOption = $firstOption ?? [];
$selectedOption = $selectedOption ?? null;
$optionsGroups = $optionsGroups ?? [];
$onchange = $onchange ?? null;
$required = $required ?? false;
$readonly = $readonly ?? false;
?>
<select
    class="{!! join(' ', $class) !!}"
    {!! !is_null($name) ? 'name="'.$name.'"' : null !!}
    {!! !is_null($id) ? 'id="'.$id.'"' : null !!}
    {!! !is_null($size) ? 'size="'.$size.'"' : null !!}
    {!! !is_null($onchange) ? 'onchange="'.$onchange.'"' : null !!}
    {!! $disable ? 'disable' : null !!}
    {!! $required ? 'required' : null !!}
    {!! $readonly ? 'readonly' : null !!}>
    @if($firstOption)
        <option value="{{$firstOption['value']}}">{{$firstOption['text']}}</option>
    @endif
    @foreach($options as $value => $text)
        <option value="{{$value}}" <?php if ($selectedOption == $value) echo 'selected'?>>{{$text}}</option>
    @endforeach
    @if($optionsGroups)
        @foreach($optionsGroups as $label => $options)
            <optgroup label="{{$label}}">
                @foreach($options as $value => $text)
                    <option value="{{$value}}" <?php if ($selectedOption == $value) echo 'selected'?>>{{$text}}</option>
                @endforeach
            </optgroup>
        @endforeach
    @endif
</select>
