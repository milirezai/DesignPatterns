<?php
namespace Creational\builder;

use Creational\builder\Model;

require_once __DIR__."/../../vendor/autoload.php";

class User extends Model
{

}


$user = new User();
echo $user->select("users",['name','email'])
    ->where('id',2,'=')
    ->where('name','milad','=')
    ->where('age',22,'<')->getQuery();