<?php

namespace Behavioral\c_ommand;

class Receiver
{
    private int $value = 0;
    public function add(int $value): void
    {
        $this->value += $value;
    }
    public function subtract($value): void
    {
        $this->value -= $value;
    }
    public function getValue(): int
    {
        return $this->value;
    }
}