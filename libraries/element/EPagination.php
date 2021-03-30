<?php

namespace Libraries\element;


use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Libraries\BaseClass;
use RuntimeException;

class EPagination implements ViewRender
{
    use BaseClass;

    protected $lastPage = null;
    protected $currentPage = null;
    protected $previousPage = null;
    protected $nextPage = null;

    public function view()
    {
        $data = $this->getClassVar();
        return view('backend.template.components.element.pagination', $data)->render();
    }

    public function show()
    {
        echo $this->view();
        $this->reset();
    }

    /**
     * @param LengthAwarePaginator $pagination
     */
    public function setPagination(LengthAwarePaginator $pagination): void
    {
        if ($pagination->isEmpty()) {
            throw new RuntimeException("{$this->getClassName()} collection is empty.");
        }

        // 最後一頁
        $this->lastPage = $pagination->lastPage();
        // 當前頁數
        $this->currentPage = intval(request()->input('page'));
        $this->currentPage = $this->currentPage < 1 ? 1 : $this->currentPage;
        // 上一頁
        $this->previousPage = $this->currentPage - 1;
        $this->previousPage = $this->previousPage < 1 ? 1 : $this->previousPage;
        // 下一頁
        $this->nextPage = $this->currentPage + 1;
        $this->nextPage = $this->nextPage > $this->lastPage ? $this->lastPage : $this->nextPage;
    }

    /**
     * @param $page
     * 設定當前頁數
     */
    public function setCurrentPage($page)
    {
        $this->currentPage = $page instanceof Request ? intval(request()->input('page')) : $page;
    }
}
