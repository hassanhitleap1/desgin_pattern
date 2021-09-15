<?php


namespace Creational\AbstractFacrory3;


interface OrdersExportFace
{
    public function export(): void;
    public function set_data_orders($data): void;
    public function get_ides():array;
    public function set_ides($ides):void;
    public function get_data_orders(): array;
    public function save($alias_name , $path): void;

}