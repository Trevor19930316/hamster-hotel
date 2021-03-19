<?php

namespace Libraries\element;


use RuntimeException;

class EInput extends Element
{
    protected $type;
    protected $max;
    protected $maxlength;
    protected $min;
    protected $minlength;
    protected $placeholder;
    protected $onkeyup;
    protected $onkeypress;
    protected $textNumber;

    public function view()
    {
        if (is_null($this->type)) {
            throw new RuntimeException("input type is null");
        }

        $inputData = $this->getClassVar();

        return view('backend.template.components.element.input', $inputData)->render();
    }

    public function show()
    {
        echo $this->view();

        dump($this->getClassVar());
    }

    public function __construct()
    {
        parent::__construct();

        $this->type = 'text';
        $this->max = null;
        $this->maxlength = null;
        $this->min = null;
        $this->minlength = null;
        $this->placeholder = null;
        $this->onkeyup = null;
        $this->onkeypress = null;
        $this->textNumber = false;
    }

    /**
     * @param string $type
     * @return EInput
     */
    public function setType(string $type): EInput
    {
        if (!in_array($type, ['number', 'submit', 'text'])) {
            throw new RuntimeException("EInput setType($type) is invalid.");
        }

        $this->type = $type;

        return $this;
    }

    /**
     * @param null $max
     * @return EInput
     */
    public function setMax($max): EInput
    {
        $this->max = $max;

        return $this;
    }

    /**
     * @param null $maxlength
     * @return EInput
     */
    public function setMaxlength($maxlength): EInput
    {
        $this->maxlength = $maxlength;

        return $this;
    }

    /**
     * @param null $min
     * @return EInput
     */
    public function setMin($min): EInput
    {
        $this->min = $min;

        return $this;
    }

    /**
     * @param null $minlength
     * @return EInput
     */
    public function setMinlength($minlength): EInput
    {
        $this->minlength = $minlength;

        return $this;
    }

    /**
     * @param null $placeholder
     * @return EInput
     */
    public function setPlaceholder($placeholder): EInput
    {
        $this->placeholder = $placeholder;

        return $this;
    }

    /**
     * @param null $onkeyup
     * @return EInput
     */
    public function setOnkeyup($onkeyup): EInput
    {
        $this->onkeyup = $onkeyup;

        return $this;
    }

    /**
     * @param null $onkeypress
     * @return EInput
     */
    public function setOnkeypress($onkeypress): EInput
    {
        $this->onkeypress = $onkeypress;

        return $this;
    }

    /**
     * @param bool $textNumber
     * @return EInput
     */
    public function isTextNumber(bool $textNumber = true): EInput
    {
        $this->textNumber = true;

        return $this;
    }
}
