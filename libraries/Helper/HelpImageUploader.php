<?php

namespace Libraries\Helper;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;

Class HelpImageUploader
{
    // storage disk
    static $storageDisk = 'storage_public';
    // storage image directory
    static $storageImageDirectory = 'image';

    public function __construct(){}

    /**
     * set storage to upload image.
     * @param string $storageDisk
     * @throws Exception
     */
    public static function setStorageDisk(string $storageDisk)
    {
        if (!Storage::exists($storageDisk)) {
            throw new Exception("storage disk : $storageDisk is not exists");
        }
        static::$storageDisk = $storageDisk;
    }

    /**
     * set directory to upload image, the directory will be created when it is not exist.
     * @param string $directory
     * @throws Exception
     */
    public static function setStorageImageFolder(string $directory)
    {
        if (!Storage::exists($directory)) {
            Storage::makeDirectory($directory);
        }
        static::$storageImageDirectory = $directory;
    }

    /**
     * upload single file
     * @param $file
     * @param string $fileName
     * @param string $path
     * @param string $storageDisk
     * @return bool
     * @throws Exception
     */
    public static function uploadFile($file, $fileName = '', $path = '', $storageDisk = '')
    {
        $fileName = empty($fileName) ? now()->toString() . rand(0, 999) : $fileName;
        $path = empty($path) ? storage_path('image') : $path;
        $storageDisk = empty($storageDisk) ? static::$storageDisk : $storageDisk;

        // Upload File
        if (!Storage::disk($storageDisk)->putFileAs($path, $file, $fileName)) {

            throw new Exception("upload file to storage disk is failed.");
        }

        return true;
    }

    /**
     * upload multiple files
     * @param Request $request
     * @param array $fileNames
     * @param string $path
     * @param string $storageDisk
     */
    public static function uploadFiles(Request $request, $fileNames = [], $path = '', $storageDisk = '')
    {

    }

    /**
     * @param $file
     * @param $tableName
     * @param $columnName
     * @param $dataId
     * @return bool
     * @throws Exception
     */
    public static function uploadFileAtTable($file, $tableName, $columnName, $dataId)
    {
        if (!Schema::hasTable($tableName)) {

            throw new Exception("table : $tableName is not exists.");

        } elseif (!Schema::hasColumn($tableName, $columnName)) {

            throw new Exception("column : $columnName is not exists.");

        }

        $uploadPath = storage_path(static::$storageImageDirectory . '/' . $tableName);
        $fileFullName = $dataId . '.' . strtolower($file->extension());

        if (!static::uploadFile($file, $dataId, $uploadPath)) {
            return false;
        }

        Model::setTable($tableName)->where('id', '=', $dataId)->update([
            $columnName => $uploadPath . '/' . $fileFullName
        ]);

        return true;
    }
}
