<?php
$fileExtensionsLimit = $fileExtensionsLimit ?? [];
$fileMaxSize = $fileMaxSize ?? null;
$fileQuantity = $fileQuantity ?? null;
$imageMaxWidth = $imageMaxWidth ?? null;
$imageMaxHeight = $imageMaxHeight ?? null;

if (!$fileExtensionsLimit) {
    $fileExtensions = config('filesystems.upload.extensions.file');
    $imageExtensions = config('filesystems.upload.extensions.image');
    $fileExtensionsLimit = array_merge($fileExtensions, $imageExtensions);
}
?>
<div class="text-warning">
    <span class="d-block">
        限制檔案類型 : {{join(',', $fileExtensionsLimit)}}
    </span>
    <span class="d-block">
        限制檔案大小 : {{$fileMaxSize . $fileQuantity}}
    </span>
    <span class="d-block">
        @if(is_null($imageMaxWidth) && is_null($imageMaxHeight))
            建議圖片尺寸 ： 無限制
        @else
            建議圖片尺寸：寬 {{$imageMaxWidth}} px
            建議圖片尺寸：寬高 {{$imageMaxHeight}} px
        @endif
    </span>
</div>
