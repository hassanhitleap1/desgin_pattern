<?php


namespace Tests;


use Creational\AbstractFacrory2\CSVFile;
use Creational\AbstractFacrory2\HtmlFile;
use Creational\AbstractFacrory2\XLSFile;
use Creational\AbstractFactory\BenzCar;
use Creational\AbstractFactory\BMWCar;
use Creational\AbstractFactory\CarAbstractFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactory2Test extends  TestCase
{

    public function testUploadFileXls(){
        $file= new XLSFile(1);
//        $file->set_name("name xls");
//        $file->upload_file();
//        $this->assertInstanceOf(XLSFile::class,$file);
    }

    public function testUploadFileCSV(){
//        $file= new CSVFile(1);
//        $file->set_name("name csv");
//        $file->upload_file();
//        $this->assertInstanceOf(CSVFile::class,$file);
    }


    public function testUploadFileHtml(){
//        $file= new HtmlFile(1);
//        $file->set_name("name html");
//        $file->upload_file();
//        $this->assertInstanceOf(HtmlFile::class,$file);
    }
}