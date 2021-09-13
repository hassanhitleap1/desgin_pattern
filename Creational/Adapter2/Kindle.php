<?php


namespace Creational\Adapter2;


class Kindle implements EBook
{
    private  $page = 1;
    private  $totalPages = 100;

    public function unlock()
    {
        // TODO: Implement unlock() method.
        return [$this->page, $this->totalPages];
    }

    public function pressNext()
    {
        // TODO: Implement pressNext() method.
        $this->page++;
    }

    /**
     * returns current page and total number of pages, like [10, 100] is page 10 of 100
     *
     * @return int[]
     */
    public function getPage(): array
    {
        // TODO: Implement getPage() method.
    }
}