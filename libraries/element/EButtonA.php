<?php

namespace Libraries\element;


use RuntimeException;

class EButtonA
{
    protected $class = ['btn btn-prim'];
    protected $icon = null;
    protected $text = null;
    protected $link = '#';
    protected $target = null;
    protected $onclick = null;
    protected $disabled = false;
    protected $dataAttributes = [];

    public function view()
    {
        $data = $this->getClassVar();
        return view('backend.template.components.element.buttonA', $data)->render();
    }

    public function show()
    {
        echo $this->view();
        $this->reset();
    }

    /**
     * @param null $class
     */
    public function setClass($class)
    {
        array_push($this->class, $class);
    }

    /**
     * @param array $classes
     */
    public function setClasses(array $classes)
    {
        $this->class = array_unique(array_merge($this->class, $classes));
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

        if (is_null($this->text)) {
            $this->text = $EIcon->getIconText();
        }

        return $icon;
    }

    /**
     * @param string $link
     */
    public function setLink(string $link): void
    {
        $this->link = $link;
    }

    /**
     * @param null $icon
     */
    public function setIcon($icon): void
    {
        $this->icon = $this->getIcon($icon);
    }

    /**
     * @param null $text
     */
    public function setText($text): void
    {
        $this->text = $text;
    }

    /**
     * @param null $target
     */
    public function setTarget($target): void
    {
        $this->target = $target;
    }

    /**
     * @param null $onclick
     */
    public function setOnclick($onclick): void
    {
        $this->onclick = $onclick;
    }

    /**
     * @param $dataName
     * @param $dataValue
     */
    public function setDataAttributes($dataName, $dataValue): void
    {
        $this->dataAttributes[$dataName] = $dataValue;
    }

    /**
     * @param bool $disabled
     */
    public function isDisabled(bool $disabled = true)
    {
        $this->disabled = $disabled;
    }

    /**
     * @return array
     */
    protected function getClassVar()
    {
        return get_object_vars($this);
    }

    /**
     * reset the object vars
     */
    protected function reset()
    {
        $vars = get_class_vars(get_class($this));
        foreach ($vars as $var => $varDef) {
            $this->$var = $varDef;
        }
    }
}
