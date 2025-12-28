<?php

namespace Behavioral\c_ommand;

use Behavioral\c_ommand\Command;

class SubtractCommand implements Command
{

    public function __construct(
        protected readonly Receiver $receiver,
        protected readonly int $value
    ){}

    public function execute(): void
    {
        $this->receiver->add($this->value);
    }

    public function undo(): void
    {
        $this->receiver->subtract($this->value);
    }
}