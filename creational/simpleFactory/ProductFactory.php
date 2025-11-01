<?php
namespace Creational\SimpleFactory;

use Creational\SimpleFactory\Book;
use Creational\SimpleFactory\Clothes;
use Creational\SimpleFactory\Digital;

class ProductFactory
{
    public function createProduct(string $type, string $name, int $price, string $description):Product
    {
        $products = require_once "Register.php";
        foreach ($products as $productType => $productClass ){
            if ($type === $productType){
                return new $productClass($name, $price, $description);
            }else{
                echo 'This product is not available';
                exit;
            }
        }

    }
}