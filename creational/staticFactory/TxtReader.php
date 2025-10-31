<?php
namespace Creational\StaticFactory;
use Creational\StaticFactory\DataReader;
class TxtReader implements DataReader
{
    public function dataReader($data):string
    {
        return "data txt format";
    }
}