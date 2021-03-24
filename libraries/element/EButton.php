<?php

namespace Libraries\element;


use Libraries\BaseClass;
use RuntimeException;

class EButton implements ViewRender
{
    use BaseClass;

    protected $name = null;
    protected $id = null;
    protected $class = ['btn'];
    protected $type = 'button';
    protected $text = null;
    protected $icon = null;
    protected $iconPosition = null;
    protected $onclick = null;
    protected $disabled = false;
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

    /**
     * @param null $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @param null $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @param array $class
     */
    public function setClass(array $class): void
    {
        $this->class = $class;
    }

    /**
     * @param array $classes

     */
    public function setClasses(array $classes)
    {
        $this->class = array_unique(array_merge($this->class, $classes));
    }

    /**
     * @param $type
     */
    public function setType($type): void
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
    public function setLeftIcon($icon)
    {
        $this->iconPosition = 'left';
        $this->icon = $this->getIcon($icon);
    }

    /**
     * @param $icon
     */
    public function setRightIcon($icon)
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
