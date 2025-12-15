<?php

namespace Structural\dataMapper ;
require_once __DIR__ . "/../../vendor/autoload.php";
use PDO;
class Client
{
    public static function run(int $id, object|string $user = '')
    {
        $db = new PDO("mysql:host=127.0.0.1;dbname=api", 'root', );
        $userMapper = new UserMapper($db);
        if ($user){
          return  $userMapper->save($user);
        }
        return $userMapper->getById($id);
    }

}

var_dump(
  Client::run(50)
);