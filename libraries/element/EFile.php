<?php

namespace Libraries\element;


use Illuminate\Support\Str;
use RuntimeException;

class EFile extends Element
{
    protected $value = null;
    protected $uploadFileMaxSize = null;
    protected $uploadFileQuantity = 'kb';
    protected $imageMaxWidth = null;
    protected $imageMaxHeight = null;
    protected $fileExtensionsLimit = [];
    protected $reminderNotes = [];
    protected $isFile = false;
    protected $isImage = false;
    protected $isMultiple = false;

    // file extensions
    protected $fileExtensions = [];
    // image extensions
    protected $imageExtensions = [];
    // file quantities
    protected $fileQuantities = [];

    public function __construct()
    {
        $this->fileExtensions = config('filesystems.upload.extensions.file');
        $this->imageExtensions = config('filesystems.upload.extensions.image');
        $this->fileQuantities = config('filesystems.upload.quantities');

        $this->fileExtensionsLimit = array_merge($this->fileExtensions, $this->imageExtensions);
    }

    public function view()
    {
        if (is_null($this->name)) {
            throw new RuntimeException("name can not be null.");
        }

        $data = $this->getClassVar();
        return view('backend.template.components.element.file', $data)->render();
    }

    public function show()
    {
        echo $this->view();
        $this->reset();
    }

    /**
     * @param null $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @param null $size 檔案尺寸
     * @param string $quantities 檔案尺寸單位
     * 上傳檔案最大大小
     */
    public function setUploadFileMaxSize($size, $quantities = 'kb')
    {

        $quantities = Str::lower($quantities);

        if (!in_array($quantities, $this->fileQuantities)) {
            throw new RuntimeException("quantities : ($quantities) is invalid");
        }

        $this->uploadFileMaxSize = $size;
        $this->uploadFileQuantity = $quantities;
    }

    /**
     * @param null $width
     * @param null $height
     * 上傳圖片最大寬度與長度
     */
    public function setImageMaxWidthAndHeight($width = null, $height = null)
    {
        $this->imageMaxWidth = $width;
        $this->imageMaxHeight = $height;
        $this->isImage();
    }

    /**
     * @param array $extensions
     * 上傳檔案副檔名限制
     */
    public function setFileExtensionsLimit(array $extensions)
    {
        $this->fileExtensionsLimit = $extensions;
    }

    /**
     * @param bool $isImage
     * 指定上傳為圖片類型
     */
    public function isImage(bool $isImage = true)
    {
        $this->isImage = $isImage;
        $this->fileExtensionsLimit = $this->imageExtensions;
    }

    /**
     * @param bool $isFile
     * 指定上傳為檔案類型(不含圖片)
     */
    public function isFile(bool $isFile = true)
    {
        $this->isFile = $isFile;
        $this->fileExtensionsLimit = $this->fileExtensions;
    }

    /**
     * @param bool $isMultiple
     * 指定上傳多個檔案
     */
    public function isMultiple(bool $isMultiple = true)
    {
        $this->isMultiple = $isMultiple;
    }

    public function showReminderNotes()
    {
        $this->reminderNotes = [
            'fileExtensionsLimit' => $this->fileExtensionsLimit,
            'fileMaxSize' => $this->uploadFileMaxSize,
            'fileQuantity' => $this->uploadFileQuantity,
            'imageMaxWidth' => $this->imageMaxWidth,
            'imageMaxHeight' => $this->imageMaxHeight,
        ];

        return view('backend.template.components.element.file-reminder-notes')->render();
    }
}
