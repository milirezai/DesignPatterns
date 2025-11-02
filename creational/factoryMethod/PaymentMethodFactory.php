<?php
namespace Creational\factoryMethod;

use Creational\factoryMethod\PaymentMethod;

interface PaymentMethodFactory
{
    public function create():PaymentMethod;
}