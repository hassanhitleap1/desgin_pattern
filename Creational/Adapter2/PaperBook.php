<?php


namespace Creational\Adapter2;


class PaperBook implements Book
{
    private  $page;
    public function getPage(): init
    {
        // TODO: Implement getPage() method.
        $this->page++;
    }
    public function open() : void
    {
        // TODO: Implement open() method.
        $this->page = 1;
    }
    public function turnPage() :int
    {
        // TODO: Implement turnPage() method.
        return $this->page;
    }
}
