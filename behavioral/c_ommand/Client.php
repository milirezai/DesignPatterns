<?php

namespace Behavioral\c_ommand;
require_once __DIR__.'/../../vendor/autoload.php';

class Client
{
    public static function run()
    {
        $receiver = new Receiver();
        $invoker = new Invoker();

        $invoker->addCommand(new AddCommand($receiver,5));
        $invoker->addCommand(new  SubtractCommand($receiver,3));

        $invoker->executeCommands();
        echo "Current value: " . $receiver->getValue() . "\n";

        $invoker->undo();
        echo "Undone: Current value: " . $receiver->getValue() . "\n";

    }
}

Client::run();