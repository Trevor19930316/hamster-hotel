<?php
use Illuminate\Support\Str;

if (!function_exists('getModelName')) {
    function getModelName($str)
    {
        return Str::title(Str::studly(Str::singular(Str::lower($str))));
    }
}

if (!function_exists('getTableName')) {
    function getTableName($str)
    {
        return Str::of(Str::plural(Str::lower($str)))->camel();
    }
}
