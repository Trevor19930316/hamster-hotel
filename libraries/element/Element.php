<?php

namespace Libraries\element;

abstract class Element implements ViewRender
{
    protected $class = [];
    protected $text = null;
    protected $dataAttributes = [];
    protected $disabled = false;

    public function __construct(){}

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

    /**
     * @param null $name

     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param null $id

     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @param null $onchange
     */
    public function setOnchange($onchange)
    {
        $this->onchange = $onchange;
    }

    /**
     * @param bool $disabled
     */
    public function isDisable($disabled = true)
    {
        $this->disabled = (boolean)$disabled;
    }

    /**
     * @param bool $required

     */
    public function isRequired($required = true)
    {
        $this->required = (boolean)$required;
    }

    /**
     * @param bool $readonly
     */
    public function isReadonly($readonly = true)
    {
        $this->readonly = (boolean)$readonly;
    }

    /**
     * @return array
     */
    protected function getClassVar()
    {
        return get_object_vars($this);
    }
}
