<?php
// form 模組
// form 模組 formAction
$formAction = $formAction ?? null;
// form 模組 formDisabledNullElements ['true','false']
$formDisabledNullElements = $formDisabledNullElements ?? 'false';
// form 模組 formMethod
$formMethod = isset($formMethod) ? strtolower($formMethod) : 'post';
// form 模組 formName
$formName = $formName ?? 'formName';
// form 模組 表單驗證 formValidation ['true','false']
$formValidation = $formValidation ?? 'true';
// form 模組 method ( 用 put | patch 時候，才要特別改 )
$method = isset($method) ? strtolower($method) : null;
// form 模組 formTarget [_blank|_self|_parent|_top]
$formTarget = $formTarget ?? '_self';
// form 模組 formContent
$formContent = $formContent ?? null;

// 當 method 是 ['patch','put','delete'] 強制把 $formMethod 變成 post
$formMethod = in_array($method, ['patch', 'put', 'delete']) ? 'post' : $formMethod;
$formClass = [];
$formDisabledNullElements == 'true' ? $formClass[] = 'disabledNullElements' : null;
$formValidation == 'true' ? $formClass[] = 'needs-validation' : null;
?>
<form action="<?=$formAction;?>"
      class="<?=join(' ', $formClass);?>"
      enctype="multipart/form-data"
      name="<?=$formName;?>"
      method="<?=$formMethod;?>"
      target="{{$formTarget}}"
      novalidate>
    <?=$formContent;?>
    <input name="_token" type="hidden" value="<?=$formMethod == 'post' ? csrf_token() : null;?>">
    <input name="_method" type="hidden" value="<?=$method;?>">
</form>
