<?php


namespace Libraries;


trait BaseClass
{
    /**
     * reset the object vars
     * @param $exceptionVars
     */
    protected function reset($exceptionVars = [])
    {
        $vars = get_class_vars(get_class($this));
        foreach ($vars as $var => $varDef) {
            if (!in_array($var, $exceptionVars)) {
                $this->$var = $varDef;
            }
        }
    }

    /**
     * @return array
     */
    protected function getClassVar()
    {
        return get_object_vars($this);
    }

    /**
     * @return string
     */
    protected function getClassName()
    {
        return get_class($this);
    }
}
