<?php

namespace Libraries\element;


use RuntimeException;

class EButton extends Element
{
    protected $class = ['btn'];
    protected $type = 'button';
    protected $text = null;
    protected $icon = null;
    protected $iconPosition = null;
    protected $onclick = null;
    protected $textResponsive = true;

    public function view()
    {
        $data = $this->getClassVar();
        return view('backend.template.components.element.button', $data)->render();
    }

    public function show()
    {
        echo $this->view();
        $this->reset();
    }

    public function setType($type)
    {
        if (!in_array($type, ['button', 'submit', 'reset'])) {
            throw new RuntimeException("EButton setType($type) is invalid.");
        }

        $this->type = $type;

        if (is_null($this->text)) {

            switch ($type) {

                case 'button':
                    $this->text = __('template/element/button.button');
                    break;
                case 'submit':
                    $this->text = __('template/element/button.submit');
                    break;
                case 'reset':
                    $this->text = __('template/element/button.reset');
                    break;
                default:
                    $this->text = __('template/element/button.button');
            }
        }
    }

    /**
     * @param string $text
     */
    public function setText(string $text)
    {
        $this->text = $text;
    }

    /**
     * @param null $onclick
     */
    public function setOnclick($onclick)
    {
        $this->onclick = $onclick;
    }

    /**
     * @param $icon
     * @return mixed
     */
    private function getIcon($icon)
    {
        $EIcon = new EIcon();
        $EIcon->setIcon($icon);
        $EIcon->isShowText(false);
        $icon = $EIcon->view();

        return $icon;
    }

    /**
     * @param $icon
     */
    public function withLeftIcon($icon)
    {
        $this->iconPosition = 'left';
        $this->icon = $this->getIcon($icon);
    }

    /**
     * @param $icon
     */
    public function withRightIcon($icon)
    {
        $this->iconPosition = 'right';
        $this->icon = $this->getIcon($icon);
    }

    /**
     * @param bool $textResponsive
     */
    public function isTextResponsive($textResponsive = true)
    {
        $this->textResponsive = $textResponsive;
    }
}
