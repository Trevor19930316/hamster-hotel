<?php

namespace Libraries\element;


use RuntimeException;

class ECheckbox extends Element
{
    protected $class = ['form-check-input'];
    protected $checkboxData = [];
    protected $checkedValue = null;
    protected $inline = false;

    public function view()
    {
        $data = $this->getClassVar();

        return view('backend.template.components.element.input-checkbox', $data)->render();
    }

    public function show()
    {
        //dump($this->getClassVar());
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
     * @param null $value
     *
     */
    public function setCheckedValue($value)
    {
        $this->checkedValue = $value;
    }

    /**
     * @param bool $inline
     */
    public function isInline($inline = true)
    {
        $this->inline = $inline;
    }

}
