<?php
namespace Creational\SimpleFactory;

use Creational\SimpleFactory\ProductFactory;
require_once __DIR__."/../../vendor/autoload.php";

class Client
{
    public function run($type, $name, $price, $description)
    {
        $productFactory = new ProductFactory();
        $product = $productFactory->createProduct($type, $name, $price,$description);
        return [
            'name' => $product->getName(),
            'price' => $product->getPrice(),
            'description' => $product->getDescription()
        ];
    }
}
$product = new Client();
$productInfo = $product->run('book','Harry potter',23242,'this is a book Harry potter');
var_dump($productInfo);