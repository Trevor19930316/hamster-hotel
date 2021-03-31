<?php

namespace Libraries\element;

use Libraries\BaseClass;

abstract class Element implements ViewRender
{
    use BaseClass;

    protected $name = null;
    protected $id = null;
    protected $class = ['form-control'];
    protected $onchange = null;
    protected $disabled = false;
    protected $required = false;
    protected $readonly = false;

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
     * @param bool $isColored
     */
    public function isColored(bool $isColored = true)
    {
        $isColored ? $this->setClasses(['isColored']) : null;
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
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
}
