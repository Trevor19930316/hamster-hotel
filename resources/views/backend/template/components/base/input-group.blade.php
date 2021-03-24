<?php
/* prepend */
$prependCount = isset($prependCount) ? abs(intval($prependCount)) : 0;
$prependClassAdd = $prependClassAdd ?? null;
/* content */
$content = $content ?? null;
$contentDiv = $contentDiv ?? null;
/* append */
$appendCount = isset($appendCount) ? abs(intval($appendCount)) : 0;
$appendClassAdd = $appendClassAdd ?? null;
?>

<div class="input-group">
    {{-- prepend --}}
    @if($prependCount > 0)
        @foreach(range(1,$prependCount) as $count)
            <?php
            $prependType = 'prependType' . $count;
            $$prependType = isset($$prependType) ? $$prependType : null;
            $prependContent = 'prependContent' . $count;
            $$prependContent = isset($$prependContent) ? $$prependContent : null;
            ?>
            <div class="input-group-prepend <?=$prependClassAdd;?>">
                @if($$prependType=='text')
                    <div class="input-group-text">
                        <?=$$prependContent;?>
                    </div>
                @else
                    <?=$$prependContent;?>
                @endif
            </div>
        @endforeach
    @endif

    {!! $content !!}
    @if(!is_null($contentDiv))
        <div class="form-control text-nowrap overflow-x-auto hide-scroll-bar">
            {!! $contentDiv !!}
        </div>
    @endif

    {{-- append --}}
    @if($appendCount > 0)
        @foreach(range(1,$appendCount) as $count)
            <?php
            $appendType = 'appendType' . $count;
            $$appendType = isset($$appendType) ? $$appendType : null;
            $appendContent = 'appendContent' . $count;
            $$appendContent = isset($$appendContent) ? $$appendContent : null;
            ?>
            <div class="input-group-append <?=$appendClassAdd;?>">
                @if($$appendType=='text')
                    <div class="input-group-text">
                        <?=$$appendContent;?>
                    </div>
                @else
                    <?=$$appendContent;?>
                @endif
            </div>
        @endforeach
    @endif
</div>
