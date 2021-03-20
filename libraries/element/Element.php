<?php

namespace Libraries\element;

abstract class Element implements ViewRender
{
    protected $name = null;
    protected $id = null;
    protected $class = ['form-control'];
    protected $onchange = null;
    protected $disable = false;
    protected $required = false;
    protected $readonly = false;

    public function __construct(){}

    /**
     * reset the object vars
     */
    public function reset()
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
        $this->class[] += $class;
    }

    /**
     * @param null $onchange
     */
    public function setOnchange($onchange)
    {
        $this->onchange = $onchange;
    }

    /**
     * @param bool $disable
     */
    public function isDisable($disable = true)
    {
        $this->disable = (boolean)$disable;
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
    public function getClassVar()
    {
        return get_object_vars($this);
    }
}
