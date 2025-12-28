<?php

namespace Behavioral\c_ommand;

interface Command
{
    public function execute();
    public function undo();
}