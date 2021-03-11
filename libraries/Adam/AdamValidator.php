<?php

namespace Libraries;

use Exception;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

Class AdamValidator
{
    // 表格名稱
    protected $table = '';
    // 驗證資料
    protected $validateData = [];
    // 驗證規則
    protected $validateRules = [];
    // 錯誤訊息
    protected $errorMessages = [];

    /**
     * @param string $table
     */
    public function __construct(string $table = null)
    {
        $this->table = $table;
    }

    /**
     * 設定 驗證資料
     * @param array $validateData
     * @return AdamValidator
     */
    public function setValidateData(array $validateData)
    {
        foreach ($validateData as $key => $value) {
            $this->validateData[$this->table . '.' . $key] = $value;
        }

        return $this;
    }

    /**
     * 設定 驗證規則
     * @param array $validateRules
     * @return AdamValidator
     */
    public function setValidateRules(array $validateRules)
    {
        foreach ($validateRules as $key => $value) {
            $this->validateRules[$this->table . '.' . $key] = $value;
        }

        return $this;
    }

    /**
     * @return array
     */
    public function getErrorMessages(): array
    {
        return $this->errorMessages;
    }

    /**
     * 資料驗證
     * @return bool
     * @throws Exception
     */
    public function validate(): bool
    {
        if (is_null($this->table)) {
            throw new Exception(get_class($this) . 'do not set table');
        }

        try {
            $validator = Validator::make($this->validateData, $this->validateRules);

            if ($validator->fails()) {
                $this->errorMessages = $validator->errors()->getMessages();
                return false;
            }

        } catch (Exception $e) {

            dump($e->getMessage());
            return false;
        }

        return true;
    }

    /**
     * 驗證資料自訂語系 cache
     * @return mixed
     */
    public function cacheValidationAttributes()
    {
        $locale = app()->getLocale();
        $cacheName = "validation_attributes_$locale";

        return Cache::rememberForever($cacheName, function () {

            $cacheValidationAttributes = [];

            $tables = DB::select('SHOW TABLES');

            foreach ($tables as $table) {

                $tableName = head($table);

                $langArr = trans("$tableName/table_lang'");
                $langArr = is_array($langArr) ? $langArr : [];

                $validationAttributes = [];
                foreach ($langArr as $column => $lang) {
                    $validationAttributes[$tableName . '.' . $column] = $lang;
                }
                $cacheValidationAttributes += $validationAttributes;
            }

            return $cacheValidationAttributes;
        });
    }
}
