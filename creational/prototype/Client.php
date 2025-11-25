<?php

namespace Creational\prototype;

class Client
{
    public static function run():static
    {
        $phpProto = new PHPBookPrototype();
        $sqlProto = new SQLBookPrototype();

        $book1 = clone $phpProto;
        $book2 = clone $sqlProto;
        $book1->setTitle('book1');
        $book2->setTitle('book2');
        return $book1->getTitle().'|'.$book1->getTopic();
    }
}