<?php
// modal 模組
/* modal 名稱 */
$modalName = $modalName ?? null;
/* modal 標題 */
$modalTitle = $modalTitle ?? null;
/* modal 內容 */
$modalContent = $modalContent ?? null;
/* modal 自訂 footer */
$modalFooter = $modalFooter ?? null;
/* modal Size */
$modalSize = $modalSize ?? null;
$modalSizeClassAdd = $modalSizeClassAdd ?? null;
if ($modalSize == 'large') {
    $modalSizeClassAdd = 'modal-lg';
} elseif ($modalSize == 'small') {
    $modalSizeClassAdd = 'modal-sm';
}
/* modal Theme */
$modalTheme = $modalTheme ?? null;
$modalThemeClassAdd = $modalThemeClassAdd ?? null;
if ($modalTheme == 'primary') {
    $modalThemeClassAdd = 'modal-primary';
} elseif ($modalTheme == 'secondary') {
    $modalThemeClassAdd = 'modal-secondary';
} elseif ($modalTheme == 'success') {
    $modalThemeClassAdd = 'modal-success';
} elseif ($modalTheme == 'warning') {
    $modalThemeClassAdd = 'modal-warning';
} elseif ($modalTheme == 'danger') {
    $modalThemeClassAdd = 'modal-danger';
} elseif ($modalTheme == 'info') {
    $modalThemeClassAdd = 'modal-info';
}
?>
<div class="modal fade {{$modalName}}" tabindex="-1" role="dialog" aria-labelledby="{{$modalName}}Label"
     aria-hidden="true">
    <div class="modal-dialog {{$modalSizeClassAdd}} {{$modalThemeClassAdd}}" role="document">
        <div class="modal-content">
            @if (!is_null($modalTitle))
                <div class="modal-header">
                    {{-- title --}}
                    <h4 class="modal-title">
                        {!! $modalTitle !!}
                    </h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endif
            <div class="modal-body">
                {!! $modalContent !!}
            </div>
            <div class="modal-footer">
                @if (!is_null($modalFooter))
                    {!! $modalFooter !!}
                @else
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">
                        確定
                    </button>
                @endif
            </div>
        </div>
        <!-- /.modal-content-->
    </div>
    <!-- /.modal-dialog-->
</div>
