<?php

namespace Libraries\element;


use Illuminate\Support\Collection;
use Libraries\BaseClass;
use RuntimeException;

class EPaginationCountInfo implements ViewRender
{
    use BaseClass;

    protected $totalRowsCount = null;
    protected $pageRowsCount = null;
    protected $totalPageCount = null;

    public function view()
    {
        $data = $this->getClassVar();
        return view('backend.template.components.element.pagination-count-info', $data)->render();
    }

    public function show()
    {
        echo $this->view();
        $this->reset();
    }

    /**
     * @param Collection $pagination
     */
    public function setPagination(Collection $pagination): void
    {
        if ($pagination->isEmpty()) {
            throw new RuntimeException("{$this->getClassName()}} collection is empty.");
        }

        // 總筆數
        $this->totalRowsCount = $pagination->total();
        // 每頁筆數
        $this->pageRowsCount = $pagination->perPage();
        // 總頁數
        $this->totalPageCount = $this->lastPage();
    }
}
