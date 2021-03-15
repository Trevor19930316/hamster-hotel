<?php

require __DIR__ . '/string.php';

if (!function_exists('getModelByTableName')) {
    function getModelByTableName($tableName)
    {
        $modelName = getModelName($tableName);
        return app("App\\Models\\" . $modelName);
    }
}
