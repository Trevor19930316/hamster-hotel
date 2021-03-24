<?php


namespace Libraries;


trait BaseClass
{
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
     * @return array
     */
    protected function getClassVar()
    {
        return get_object_vars($this);
    }
}
