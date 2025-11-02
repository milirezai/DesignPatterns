<?php
namespace Creational\factoryMethod;

use Creational\factoryMethod\PaymentMethodFactory;
use Creational\factoryMethod\CreditCard;

class CreditCardFactory implements PaymentMethodFactory
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

    public function create(): PaymentMethod
    {
        return new CreditCard($this->cardNumber, $this->cvv, $this->expiryDate);
    }
}