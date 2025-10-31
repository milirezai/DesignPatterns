<?php
namespace Creational\StaticFactory;
use Creational\StaticFactory\DataProcessing;
require_once __DIR__."/../../vendor/autoload.php";

class Data
{
    public static function setFormat($type,$data)
    {
        $dataReader = \Creational\StaticFactory\DataProcessing::createDataReader($type);
        return $dataReader->dataReader($data);
    }
}

var_dump(Data::setFormat('json','dfsfsd'));
