<?php

namespace Structural\decorator;

interface Coffee
{
    public function getCost(): int;

    public function getDescription(): string;
}