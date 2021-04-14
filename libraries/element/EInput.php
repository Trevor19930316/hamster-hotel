<?php

namespace Libraries\element;


use RuntimeException;

class EInput extends Element
{
    protected $type = 'text';
    protected $value = null;
    protected $max = null;
    protected $maxlength = null;
    protected $min = null;
    protected $minlength = null;
    protected $placeholder = null;
    protected $onclick = null;
    protected $onkeyup = null;
    protected $onkeypress = null;
    protected $textNumber = false;
    protected $autocomplete = 'on';
    protected $dataId = null;
    protected $size = null;

    public function view()
    {
        if (is_null($this->type)) {
            throw new RuntimeException("EInput type is null.");
        }

        $data = $this->getClassVar();

        return view('backend.template.components.element.input', $data)->render();
    }

    public function show()
    {
        //dump($this->getClassVar());
        echo $this->view();
        $this->reset();
    }

    /**
     * @param string $type
     *
     */
    public function setType(string $type)
    {
        if (!in_array($type, ['number', 'submit', 'text', 'email', 'password', 'radio'])) {
            throw new RuntimeException("EInput setType($type) is invalid.");
        }

        $this->type = $type;
    }

    /**
     * @param null $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @param null|integer $dataId
     */
    public function setDataId($dataId)
    {
        $this->dataId = $dataId;
    }

    public function setSize($size)
    {
        $this->size = abs(intval($size));
    }

    /**
     * @param null $max
     *
     */
    public function setMax($max)
    {
        $this->max = $max;
    }

    /**
     * @param null $maxlength
     *
     */
    public function setMaxlength($maxlength)
    {
        $this->maxlength = $maxlength;
    }

    /**
     * @param null $min
     *
     */
    public function setMin($min)
    {
        $this->min = $min;
    }

    /**
     * @param null $minlength
     *
     */
    public function setMinlength($minlength)
    {
        $this->minlength = $minlength;
    }

    /**
     * @param null $placeholder
     *
     */
    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
    }

    /**
     * @param null $onclick
     */
    public function setOnclick($onclick)
    {
        $this->onclick = $onclick;
    }

    /**
     * @param null $onkeyup
     *
     */
    public function setOnkeyup($onkeyup)
    {
        $this->onkeyup = $onkeyup;
    }

    /**
     * @param null $onkeypress
     *
     */
    public function setOnkeypress($onkeypress)
    {
        $this->onkeypress = $onkeypress;
    }

    /**
     * @param string $autocomplete
     */
    public function setAutocomplete($autocomplete = 'on')
    {
        $this->autocomplete = $autocomplete;
    }

    /**
     * 設定排序
     * @param integer $id
     * @param integer $sort
     */
    public function setSort($id, $sort)
    {
        $this->setName('sorts' . $id);
        $this->setClass('sorts');
        $this->setDataId($id);
        $this->setSize(3);
        $this->setValue($sort);
        $this->setOnchange("handleSetSort($(this.form),$(this))");
        $this->isTextNumber();
    }

    /**
     * @param bool $textNumber
     *
     */
    public function isTextNumber(bool $textNumber = true)
    {
        $this->textNumber = true;
    }
}
