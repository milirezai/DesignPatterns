<?php
namespace Creational\factoryMethod;

interface PaymentMethod
{
    public function processPayment(int $amount);
}