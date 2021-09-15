<?php


namespace Creational\AbstractFacrory3;


class ExalFileOrders  implements OrdersExportFace
{
    public $data;
    public $ides;

    public function __construct($ides,$data)
    {
        $this->set_data_orders($data);
        $this->set_ides($ides);
    }

    public function export(): void
    {
        // EXPORT STRAE
        print_r($this->data);
    }
    public function set_data_orders($data): void
    {
        $this->data=$data;
    }
    public function get_ides():array
    {
        return  $this->ides;
    }

    public function set_ides($ides):void
    {
        $this->ides=$ides;
    }

    public function get_data_orders(): array
    {
        // TODO: Implement get_data_orders() method.
        return $this->data;
    }

    public function save($alias_name , $path): void
    {
        // TODO: Implement save() method.
        // create file ]
        /* create_file @$path */
        // put contant in file
        file_put_contents("$path/$alias_name.xls",$this->data);
    }
}