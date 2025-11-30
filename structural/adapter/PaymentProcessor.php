<?php

namespace Structural\adapter;

class PaymentProcessor
{
    public function __construct(
        protected Payment $payment
    )
    {}

    public function payProcess(int $amount)
    {
        $this->payment->processPayment($amount);
    }
}