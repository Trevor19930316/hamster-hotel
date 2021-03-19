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
        //dump($this->getClassVar());

        echo $this->view();
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
     *
     */
    public function setType(string $type)
    {
        if (!in_array($type, ['number', 'submit', 'text', 'email', 'password'])) {
            throw new RuntimeException("EInput setType($type) is invalid.");
        }

        $this->type = $type;
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
     * @param bool $textNumber
     *
     */
    public function isTextNumber(bool $textNumber = true)
    {
        $this->textNumber = true;
    }
}
