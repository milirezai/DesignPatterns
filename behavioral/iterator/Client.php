<?php

namespace Behavioral\iterator;
require_once __DIR__.'/../../vendor/autoload.php';

class Client
{
    public static function handel()
    {
        $user1 = new User('amir',10);
        $user2 = new User('sam',12);
        $user3 = new User('mahyar',5);

        $userList = new UserList();
        $userList->add($user1);
        $userList->add($user2);
        $userList->add($user3);

        foreach ($userList as $user){
            echo $user->getInfo().PHP_EOL;
        }

        $userList->remove($user2);

        foreach ($userList as $user){
            echo $user->getInfo().PHP_EOL;
        }

    }
}

Client::handel();