<?php
$name = $name ?? null;
$value = $value ?? null;
$isFile = $isFile ?? false;
$isImage = $isImage ?? false;
$isMultiple = $isMultiple ?? false;
?>
<div class="elementFile custom-file">
    <label for="{{$name}}" class="custom-file-label"></label>
    <input class="custom-file-input" name="{{$name}}" id="{{$name}}" type="file" value="{{$value}}"/>
</div>
