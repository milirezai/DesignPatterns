<?php

namespace Structural\composite;
require_once __DIR__."/../../vendor/autoload.php";

class Client
{
    public static function run()
    {
        $book = new Book('book',32);
        $movie = new Movie('LG 43',23);

        $product = new ProductCatalog();
        $product->addProduct($book);
        $product->addProduct($movie);

        var_dump($product->getName(),$product->getPrice());
    }

}

Client::run();