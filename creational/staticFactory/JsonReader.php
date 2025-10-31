<?php
namespace Creational\StaticFactory;

class JsonReader implements DataReader
{
    public function dataReader($data):string
    {
        return "data json format";
    }
}