<?php
namespace Creational\abstractFactory;

require_once __DIR__."/../../vendor/autoload.php";

class Client
{
    public $factory;
    public function __construct($factory)
    {
        $this->factory = new $factory;
    }

    public function run()
    {
        $button = $this->factory->createButton();
        $checkbox = $this->factory->createCheckbox();
        return [
            'button' => $button->render(),
            'checkbox' => $checkbox->render()
        ];
    }

}

$client = new Client(MacOsUIFactory::class);
var_dump($client->run());