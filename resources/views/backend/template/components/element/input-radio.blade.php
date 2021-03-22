<?php
$name = $name ?? null;
$id = $id ?? null;
$class = $class ?? ['form-check-input'];
$radioData = $radioData ?? [];
$checkedValue = $checkedValue ?? null;
$onchange = $onchange ?? null;
$disable = $disable ?? false;
$required = $required ?? false;
$readonly = $readonly ?? false;
$inline = $inline ?? false;
?>
@foreach($radioData as $value => $text)
    <div class="position-relative <?=$inline ? 'form-check-inline' : null;?>">
        <div class="form-check">
            <label class="form-check-label">
                <input
                    type="radio"
                    class="{!! join(' ', $class) !!}"
                    {!! !is_null($name) ? 'name="'.$name.'"' : null !!}
                    {!! !is_null($id) ? 'id="'.$id.'"' : null !!}
                    {!! !is_null($value) ? 'value="'.$value.'"' : null !!}
                    {!! !is_null($onchange) ? 'onchange="'.$onchange.'"' : null !!}
                    {!! $disable ? 'disable' : null !!}
                    {!! $required ? 'required' : null !!}
                    {!! $readonly ? 'readonly' : null !!}
                    @if(!is_null($checkedValue))
                        @if($checkedValue==$value)
                        {{'checked'}}
                        @endif
                    @endif
                >
                <span class="form-check-text"><?=$text;?></span>
            </label>
        </div>
    </div>
@endforeach
