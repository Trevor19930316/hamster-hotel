<?php

namespace Libraries\element;


use Libraries\BaseClass;
use RuntimeException;

class EIcon implements ViewRender
{
    use BaseClass;

    protected $icons = [];
    protected $iconsText = [];

    protected $class = [];
    protected $icon = null;
    protected $title = null;
    protected $dataAttributes = [];

    public function __construct()
    {
        $this->icons = config('icons.icon-class');
        $this->iconsText = config('icons.icon-text');
    }

    /**
     * @inheritDoc
     */
    public function view()
    {
        $data = $this->getClassVar();
        return view('backend.template.components.element.icon', $data)->render();
    }

    /**
     * @inheritDoc
     */
    public function show()
    {
        echo $this->view();
        $this->reset();
    }

    /**
     * @param $class
     */
    public function setClass($class): void
    {
        array_push($this->class, $class);
    }

    /**
     * @param array $classes
     */
    public function setClasses(array $classes): void
    {
        $this->class = array_unique(array_merge($this->class, $classes));
    }

    /**
     * @param $icon
     */
    public function setIcon($icon): void
    {
        if (in_array($icon, $this->icons)) {
            throw new RuntimeException('icon data is not define at config file icons.php');
        }

        $this->icon = $this->icons[$icon];

        // 未定義 title 文字，預設帶入 config 資料
        if (is_null($this->title)) {
            $this->title = $this->iconsText[$icon];
        }
    }

    /**
     * @param $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param $dataName
     * @param $dataValue
     */
    public function setDataAttributes($dataName, $dataValue): void
    {
        $this->dataAttributes[$dataName] = $dataValue;
    }

    /**
     *
     */
    public function getIconText()
    {
       return $this->title;
    }
}
