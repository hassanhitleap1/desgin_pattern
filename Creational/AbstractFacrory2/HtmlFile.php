<?php

namespace Creational\AbstractFacrory2;


class HtmlFile implements InterfaceFiles
{
     public $id;
    public  $name;
    public $path;
    public $type;

    public function __construct($id)
    {
        $this->id=$id;
        $this->type="html";
    }

    public function set_name($name)
    {
        // TODO: Implement set_name() method.
        $this->name=$name;
    }
    public function set_path()
    {
        // TODO: Implement set_path() method.
        $this->path="upload/$this->id/";
    }
    public function upload_file()
    {
        // TODO: Implement upload_file() method.
        echo "upload file";

    }
}