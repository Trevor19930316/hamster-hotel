<?php


namespace Libraries\element;


class ERadio extends Element
{
    protected $class = ['form-check-input'];
    protected $radioData = [];
    protected $checkedValue = null;
    protected $inline = false;

    /**
     * @inheritDoc
     */
    public function view()
    {
        $data = $this->getClassVar();

        return view('backend.template.components.element.input-radio', $data)->render();
    }

    /**
     * @inheritDoc
     */
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
    public function setSingleRadioValue($value, $text): void
    {
        $this->radioData[$value] = $text;
    }

    /**
     * @param array $radioData
     */
    public function setRadioData(array $radioData): void
    {
        $this->radioData = $radioData;
    }

    /**
     * @param null $checkedValue
     */
    public function setCheckedValue($checkedValue): void
    {
        $this->checkedValue = $checkedValue;
    }

    /**
     * @param bool $inline
     */
    public function isInline(bool $inline = true): void
    {
        $this->inline = $inline;
        $this->setClass('inline');
    }

}
