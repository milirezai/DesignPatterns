<?php

namespace Structural\adapter;

class PaymentGateway
{
    public function pay(int $amount):void
    {
        echo 'payment with amount '.$amount;
    }
}