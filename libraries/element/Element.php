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
    protected $autocomplete;

    public function __construct()
    {
        $this->name = null;
        $this->id = null;
        $this->class = ['form-control'];
        $this->value = null;
        $this->onclick = null;
        $this->onchange = null;
        $this->autocomplete = 'on';
        $this->disable = false;
        $this->required = false;
        $this->readonly = false;
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
     * @param null $value

     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @param null $onclick
     */
    public function setOnclick($onclick)
    {
        $this->onclick = $onclick;
    }

    /**
     * @param null $onchange
     */
    public function setOnchange($onchange)
    {
        $this->onchange = $onchange;
    }

    /**
     * @param null $autocomplete
     */
    public function setAutocomplete($autocomplete)
    {
        $this->autocomplete = $autocomplete;
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
        $data = get_class_vars(get_class($this));
        $newData = [];
        foreach ($data as $varKey => $varVal) {
            $newData[$varKey] = $this->$varKey;
        }

        return $newData;
    }
}
