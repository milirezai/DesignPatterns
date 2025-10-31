<?php
namespace Creational\StaticFactory;
use Creational\StaticFactory\JsonReader;
use Creational\StaticFactory\CsvReader;
use Creational\StaticFactory\TxtReader;
class DataProcessing
{
    public static function createDataReader($type)
    {
        $formats = require_once "Register.php";
        foreach ($formats as $key => $class) {
            if ($type === $key) {
                return new $class();
            }
            else{
                echo 'This format is not supported for data conversion.';
                exit;
            }
        }
    }
}
