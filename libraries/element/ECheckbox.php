<?php

namespace Libraries\element;


use RuntimeException;

class ECheckbox extends Element
{
    protected $class = ['form-check-input'];
    protected $checkboxValue = [];
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
     * @param array $checkboxValue
     */
    public function setCheckboxValue(array $checkboxValue)
    {
        $this->checkboxValue = $checkboxValue;
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
