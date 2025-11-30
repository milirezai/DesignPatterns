<?php

namespace Structural\adapter;

interface Payment
{
    public function processPayment(int $amount);
}