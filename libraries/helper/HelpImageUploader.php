<?php

namespace Libraries\helper;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\File;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;
use RuntimeException;

Class HelpImageUploader
{
    // storage disk
    static $storageDisk = 'storage_images';

    public function __construct(){}

    /**
     * set storage to upload image.
     * @param string $storageDisk
     * @throws RuntimeException
     */
    public static function setStorageDisk(string $storageDisk)
    {
        if (!Storage::exists($storageDisk)) {
            throw new RuntimeException("storage disk : $storageDisk is not exists");
        }
        static::$storageDisk = $storageDisk;
    }

    /**
     * upload single file
     * @param $file
     * @param string $fileName
     * @param string $directory
     * @param string $storageDisk
     * @return bool
     * @throws RuntimeException
     */
    public static function uploadFile(UploadedFile $file, string $fileName = '', string $directory = '', string $storageDisk = '')
    {
        $storageDisk = $storageDisk == '' ? static::$storageDisk : $storageDisk;
        $storageDisk = Storage::disk($storageDisk);

        $status = $fileName == '' ? $storageDisk->putFile($directory, $file)
            : $storageDisk->putFileAs($directory, $file, $fileName . '.' . strtolower($file->extension()));

        if (!$status) {

            throw new RuntimeException("upload file to storage disk is failed.");
        };

        return true;
    }

    /**
     * upload multiple files
     * 自訂檔名需要在第一個參數的陣列 key 換成檔名，並於第二個參數帶上 true
     * @param array $files ['fileName' => file]
     * @param bool $assignFileName
     * @param string $directory
     * @param string $storageDisk
     * @return bool
     */
    public static function uploadFiles(array $files, bool $assignFileName = false, string $directory = '', string $storageDisk = '')
    {
        foreach ($files as $fileName => $file) {

            if (!$file instanceof File && !$file instanceof UploadedFile) {
                throw new RuntimeException("file is not a File or UploadedFile instance");
            }

            $fileName = $assignFileName ? $fileName : '';

            self::uploadFile($file, $fileName, $directory, $storageDisk);
        }

        return true;
    }

    /**
     * @param UploadedFile $file
     * @param string $tableName
     * @param string $columnName
     * @param int $dataId
     * @return bool
     */
    public static function uploadFileAtTable(UploadedFile $file, string $tableName, string $columnName, int $dataId)
    {
        if (!Schema::hasTable($tableName)) {

            throw new RuntimeException("table : $tableName is not exists.");

        } elseif (!Schema::hasColumn($tableName, $columnName)) {

            throw new RuntimeException("column : $columnName is not exists.");
        }

        if (!self::uploadFile($file, $dataId, $tableName, 'storage_public')) {
            return false;
        }

        $fileFullName = $dataId . '.' . strtolower($file->extension());

        $model = getModelByTableName($tableName);

        $model::where('id', '=', $dataId)->update([
            $columnName => $tableName . '/' . $fileFullName
        ]);

        return true;
    }
}
