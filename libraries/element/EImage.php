<?php

namespace Libraries\element;


use Libraries\BaseClass;
use RuntimeException;

class EImage implements ViewRender
{
    use BaseClass;

    protected $divClass = [];
    protected $imageClass = ['img-fluid'];
    protected $imageData = '#';
    // 形狀 square,circle
    //protected $shape = 'square';
    // size
    protected $width = null;
    protected $height = null;

    public function view()
    {
        $data = $this->getClassVar();
        return view('backend.template.components.element.image', $data)->render();
    }

    public function show()
    {
        echo $this->view();
        $this->reset();
    }

    public function setTableData($image)
    {
        // TODO 要改成用 HelperImageParser 帶出對應網址
        $this->imageData = $image;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url): void
    {
        $this->imageData = $url;
    }

    /**
     * @param $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @param $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function isThumbnail()
    {
        //$this->shape = 'square';
        $this->divClass = ['square-size-100'];
        $this->imageClass = ['imageThumbnail', 'img-thumbnail'];
    }

    /**
     * @param $size
     */
    public function isSquare($size = null)
    {
        //$this->shape = 'square';
        $this->width = $size . 'px';
        $this->height = $size . 'px';
        $this->imageClass = [];
    }

    /**
     * @param null $diameter
     */
    public function isCircle($diameter = null)
    {
        //$this->shape = 'circle';
        $this->width = $diameter . 'px';
        $this->height = $diameter . 'px';
        $this->imageClass = ['rounded-circle'];
    }
}
