<?php


namespace Creational\AbstractFacrory2;


class FactoryFile
{
    public function uploadFileXls(){
        $file= new XLSFile(1);
        $file->set_name("name xls");
        $file->upload_file();
        return $file;
    }

    public function uploadFileCSV(){
        $file= new CSVFile(1);
        $file->set_name("name csv");
        $file->upload_file();
        return $file;
    }


    public function uploadFileHtml(){
        $file= new HtmlFile(1);
        $file->set_name("name html");
        $file->upload_file();
        return $file;
    }
}
