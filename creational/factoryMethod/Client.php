<?php
namespace Creational\factoryMethod;

require_once __DIR__."/../../vendor/autoload.php";

class Client
{
    public function run():void
    {
        $creditCardFactory = new CreditCardFactory(2423423423,234,'12/2/2020');
        $creditCard = $creditCardFactory->create();
        $creditCard->processPayment(432);
        echo PHP_EOL;
        $payPalCardFactory = new PayPalFactory(432432423,532,'12/2/2020');
        $payPal = $payPalCardFactory->create();
        $payPal->processPayment(4223);
    }
}

$client = new Client();
$client->run();