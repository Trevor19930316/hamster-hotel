<?php

namespace Libraries\element;

abstract class Element implements ViewRender
{
    protected $name;
    protected $id;
    protected $class;
    protected $value;
    protected $disable;
    protected $required;
    protected $readonly;
    protected $onclick;
    protected $onchange;

    public function __construct()
    {
        $this->name = null;
        $this->id = null;
        $this->class = ['form-control'];
        $this->value = null;
        $this->disable = false;
        $this->required = false;
        $this->readonly = false;
        $this->onclick = null;
        $this->onchange = null;
    }

    /**
     * @param null $name
     * @return Element
     */
    public function setName($name): Element
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param null $id
     * @return Element
     */
    public function setId($id): Element
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param null $class
     * @return Element
     */
    public function setClass($class): Element
    {
        $this->class[] += $class;

        return $this;
    }

    /**
     * @param null $value
     * @return Element
     */
    public function setValue($value): Element
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @param null $onclick
     * @return Element
     */
    public function setOnclick($onclick): Element
    {
        $this->onclick = $onclick;

        return $this;
    }

    /**
     * @param null $onchange
     * @return Element
     */
    public function setOnchange($onchange): Element
    {
        $this->onchange = $onchange;

        return $this;
    }

    /**
     * @param bool $disable
     * @return Element
     */
    public function isDisable($disable = true): Element
    {
        $this->disable = (boolean)$disable;

        return $this;
    }

    /**
     * @param bool $required
     * @return Element
     */
    public function isRequired($required = true): Element
    {
        $this->required = (boolean)$required;

        return $this;
    }

    /**
     * @param bool $readonly
     * @return Element
     */
    public function isReadonly($readonly = true): Element
    {
        $this->readonly = (boolean)$readonly;

        return $this;
    }

    /**
     * @return array
     */
    public function getClassVar()
    {
        $data = get_class_vars(get_class($this));
        $newData = [];
        foreach ($data as $varKey => $varVal) {
            $newData[$varKey] = $this->$varKey;
        }

        return $newData;
    }
}
