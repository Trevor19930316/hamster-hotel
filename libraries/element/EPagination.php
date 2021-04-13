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
    protected $page = null;
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
        $this->page = intval(request()->input('page'));
        $this->page = $this->page < 1 ? 1 : $this->page;
        // 上一頁
        $this->previousPage = $this->page - 1;
        $this->previousPage = $this->previousPage < 1 ? 1 : $this->previousPage;
        // 下一頁
        $this->nextPage = $this->page + 1;
        $this->nextPage = $this->nextPage > $this->lastPage ? $this->lastPage : $this->nextPage;
    }

    /**
     * @param null $page
     * 設定當前頁數
     */
    public function setPage($page = null)
    {
        $this->page = is_null($page) ? intval(request()->input('page')) : intval($page);
    }
}
