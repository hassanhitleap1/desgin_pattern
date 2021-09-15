<?php


namespace Creational\AbstractFacrory3;


use Creational\AbstractFacrory2\CSVFile;

class FacroryOrders
{
    public function export_csv($data){
        $csv= new CSVFileOrders($data);
        $csv->export();
    }
    public function save_file_csv($data){
        $csv= new CSVFileOrders($data);
        $csv->save("csv","name");
    }


    public function export_xls($data){
        $csv= new ExalFileOrders($data);
        $csv->export();
    }
    public function save_file_xls($data){
        $csv= new ExalFileOrders($data);
        $csv->save("csv","name");
    }



    public function export_xml($data){
        $csv= new XMLFileOrders($data);
        $csv->export();
    }
    public function save_file_xml($data){
        $csv= new XMLFileOrders($data);
        $csv->save("csv","name");
    }
}