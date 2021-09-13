<?php


namespace Creational\Adapter2;


class EBookAdapter  implements Book
{
    public function __construct(EBook $eBook)
    {
    }
    public function getPage(): init
    {
        // TODO: Implement getPage() method.
        return $this->eBook->getPage()[0];
    }
    public function open()
    {
        // TODO: Implement open() method.
        $this->eBook->unlock();

    }
    public function turnPage()
    {
        // TODO: Implement turnPage() method.
        $this->eBook->pressNext();
    }
}