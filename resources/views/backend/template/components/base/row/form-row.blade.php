<?php
/* form-row 模組 */

/* form-row 類型 */
// horizontal | inline
$rowType = $rowType ?? 'inline';
/* form-row label */
$label = $label ?? null;
/* form-row 內容 */
$content = $content ?? null;
$contentText = $contentText ?? null;
/* form-row 提醒 */
$helpBlock = $helpBlock ?? null;
?>
@if ($rowType == 'inline')
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label>
                    {{$label}}
                </label>

                @if(!is_null($content))
                    {{$content}}
                @elseif(!is_null($contentText))
                    <div class="col-form-label border-bottom">{{$contentText}}</div>
                @endif

                @if (!is_null($helpBlock))
                    <span class="help-block">
                        {{$helpBlock}}
                    </span>
                @endif
            </div>
        </div>
    </div>
@elseif($rowType == 'horizontal')
    <div class="form-group row">
        <label class="col-md-3 col-form-label">
            {{$label}}
        </label>
        <div class="col-md-9">

            @if(!is_null($content))
                {{$content}}
            @elseif(!is_null($contentText))
                <div class="col-form-label border-bottom">{{$contentText}}</div>
            @endif

            @if (!is_null($helpBlock))
                <span class="help-block">
                    {{$helpBlock}}
                </span>
            @endif
        </div>
    </div>
@endif
