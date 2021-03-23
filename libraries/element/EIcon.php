<?php

namespace Libraries\element;


use RuntimeException;

class EIcon implements ViewRender
{
    protected $icons = [];
    protected $iconsText = [];

    protected $class = [];
    protected $icon = null;
    protected $text = null;
    protected $dataAttributes = [];
    protected $showText = true;

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
     * reset the object vars
     */
    protected function reset()
    {
        $vars = get_class_vars(get_class($this));
        foreach ($vars as $var => $varDef) {
            $this->$var = $varDef;
        }
    }

    /**
     * @param array $class
     */
    public function setClass(array $class): void
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

        // 未定義 text 文字內容，預設帶入 config 資料
        if (is_null($this->text)) {
            $this->text = $this->iconsText[$icon];
        }
    }

    /**
     * @param $text
     */
    public function setText($text)
    {
        $this->text = $text;
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
     * @param bool $showText
     */
    public function isShowText(bool $showText = true): void
    {
        $this->showText = $showText;
    }

    /**
     * @return array
     */
    protected function getClassVar()
    {
        return get_object_vars($this);
    }

    /**
     *
     */
    public function getIconText()
    {
       return $this->text;
    }
}
