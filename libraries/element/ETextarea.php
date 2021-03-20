<?php

namespace Libraries\element;


use RuntimeException;

class ETextarea extends Element
{
    protected $cols = '100';
    protected $rows = '5';
    protected $maxlength = null;
    protected $minlength = null;
    protected $placeholder = null;
    protected $text = null;
    protected $onkeyup = null;
    protected $onkeydown = null;

    public function view()
    {
        $data = $this->getClassVar();

        return view('backend.template.components.element.textarea', $data)->render();
    }

    public function show()
    {
        echo $this->view();
        $this->reset();
    }

    /**
     * @param null $cols
     *
     */
    public function setCols($cols)
    {
        $this->cols = $cols;
    }

    /**
     * @param null $rows
     *
     */
    public function setRows($rows)
    {
        $this->rows = $rows;
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
     * @param null $text
     *
     */
    public function setText($text)
    {
        $this->text = $text;
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
     * @param null $onkeydown
     */
    public function setOnkeydown($onkeydown)
    {
        $this->onkeydown = $onkeydown;
    }

    /**
     * @param null $onchange
     */
    public function setAutocomplete($onchange)
    {
        $this->onchange = $onchange;
    }

}
