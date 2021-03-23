<?php

namespace Libraries\element;

abstract class Element implements ViewRender
{
    protected $name = null;
    protected $id = null;
    protected $class = ['form-control'];
    protected $onchange = null;
    protected $disabled = false;
    protected $required = false;
    protected $readonly = false;

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
    public function isDisabled(bool $disabled = true)
    {
        $this->disabled = $disabled;
    }

    /**
     * @param bool $required

     */
    public function isRequired(bool $required = true)
    {
        $this->required = $required;
    }

    /**
     * @param bool $readonly
     */
    public function isReadonly(bool $readonly = true)
    {
        $this->readonly = $readonly;
    }

    /**
     * @return array
     */
    protected function getClassVar()
    {
        return get_object_vars($this);
    }
}
