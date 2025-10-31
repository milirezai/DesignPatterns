<?php
namespace Creational\StaticFactory;
use Creational\StaticFactory\DataReader;

class CsvReader implements DataReader
{
    public function dataReader($data):string
    {
        return "data csv format";
    }
}