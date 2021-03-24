<?php
$name = $name ?? null;
$id = $id ?? null;
$class = $class ?? ['form-check-input'];
$checkboxData = $checkboxData ?? [];
$checkedValue = $checkedValue ?? null;
$disabled = $disabled ?? false;
$required = $required ?? false;
$readonly = $readonly ?? false;
$inline = $inline ?? false;
?>
@foreach($checkboxData as $value => $text)
    <div class="position-relative <?=$inline ? 'form-check-inline' : null;?>">
        <div class="form-check">
            <label class="form-check-label">
                <input
                    type="checkbox"
                    class="{!! join(' ', $class) !!}"
                    {!! !is_null($name) ? 'name="'.$name.'"' : null !!}
                    {!! !is_null($id) ? 'id="'.$id.'"' : null !!}
                    {!! $disabled ? 'disabled' : null !!}
                    {!! $required ? 'required' : null !!}
                    {!! $readonly ? 'readonly' : null !!}
                    @if(!is_null($checkedValue))
                        @if($checkedValue==$value)
                        {{'checked'}}
                        @endif
                    @endif
                >
                <span class="form-check-text">{!! $text !!}</span>
            </label>
        </div>
    </div>
@endforeach
