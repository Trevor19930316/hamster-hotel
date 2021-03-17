<?php

namespace Libraries\element;


interface ViewRender
{
    /**
     * get render view
     *
     * @return mixed
     */
    public function view();

    /**
     * show render view
     *
     * @return mixed
     */
    public function show();
}
