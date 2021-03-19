<?php

use Libraries\element\EInput;
use Libraries\helper\HelpImageUploader;

$HelpImageUploader = new HelpImageUploader();
$HelpImageUploader->setStorageDisk('public');
$EInput = new EInput();
?>
<!-- Scripts -->
<script src="{{asset('js/app.js')}}" defer></script>
<!-- Styles -->
<link href="{{asset('css/app.css')}}" rel="stylesheet">

<form action="{{route('backend.test.testPost')}}" enctype="multipart/form-data" method="post">
    @csrf
    <div class="m-2 p-2">
        <span class="text-primary"> 上傳一個 : </span>
        <input type="file" id="fileId" name="fileName" value="">
    </div>
    <div class="m-2 p-2">
        <span class="text-primary"> 上傳多個 : </span>
        <input type="file" id="fileIds" name="fileNames[]" value="" multiple>
    </div>

    <button type="submit" class="w-25 btn btn-primary btn-block">送出</button>
</form>

<?php
$EInput->setType('text')->setValue(123)->show();
?>
