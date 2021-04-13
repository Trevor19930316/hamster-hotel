<?php

namespace Libraries\element;


use RuntimeException;

class ECheckbox extends Element
{
    protected $class = ['form-check-input'];
    protected $checkboxData = [];
    protected $checkedValue = null;
    protected $onclick = null;
    protected $inline = false;

    public function view()
    {
        $data = $this->getClassVar();
        return view('backend.template.components.element.input-checkbox', $data)->render();
    }

    public function show()
    {
        echo $this->view();
        $this->reset();
    }

    /**
     * @param $value
     * @param $text
     */
    public function setSingleCheckboxValue($value, $text): void
    {
        $this->checkboxData[$value] = $text;
    }

    /**
     * @param array $checkboxData
     */
    public function setCheckboxData(array $checkboxData)
    {
        $this->checkboxData = $checkboxData;
    }

    /**
     * @param null|string $value
     */
    public function setCheckedValue($value)
    {
        $this->checkedValue = $value;
    }

    /**
     * @param null|string $onclick
     */
    public function setOnclick($onclick)
    {
        $this->onclick = $onclick;
    }

    /**
     * @param bool $inline
     */
    public function isInline($inline = true)
    {
        $this->inline = $inline;
    }

    /**
     * 全選 checkbox
     */
    public function isCheckAll()
    {
        is_null($this->name) ? $this->setName('ids') : null;
        $this->setClass('CheckAll');
        $this->setOnclick('checkboxCheckAll($(this))');
        $this->setSingleCheckboxValue(null, null);
        $this->setCheckedValue(old($this->name, request()->input($this->name)));
    }

    /**
     * @param integer $id
     */
    public function isCheckId($id)
    {
        is_null($this->name) ? $this->setName('ids') : null;
        $this->setSingleCheckboxValue($id, null);
        $this->setCheckedValue(old($this->name, request()->input($this->name)));
    }
}
