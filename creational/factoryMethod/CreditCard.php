<?php
namespace Creational\factoryMethod;

use Creational\factoryMethod\PaymentMethod;

class CreditCard implements PaymentMethod
{
    private $cardNumber;
    private $cvv;
    private $expiryDate;

    public function __construct($cardNumber, $cvv, $expiryDate)
    {
        $this->cardNumber = $cardNumber;
        $this->cvv = $cvv;
        $this->expiryDate = $expiryDate;
    }

    public function processPayment(int $amount)
    {
        echo "processing payment by credit card";
    }
}