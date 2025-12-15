<?php

namespace Structural\dataMapper;

use PDO;
class UserMapper
{
    public function __construct(
        protected readonly \PDO $db
    ){}

    public function getById(int $id) : ?User
    {
        $smt = $this->db->prepare("SELECT * FROM users WHERE  id= :id");
        $smt->bindParam(':id',$id);
        $smt->execute();
        $result = $smt->fetch(PDO::FETCH_ASSOC);
        if (!$result){
            return  null;
        }
        return new User($result['name'],$result['email'],$result['id']);
    }
    public function save(User $user): void
    {
        $stmt = $this->db->prepare('INSERT INTO users (name, email) VALUES (:name, :email)');
        $name = $user->getName();
        $stmt->bindParam(':name', $name);
        $email = $user->getEmail();
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user->setId($this->db->lastInsertId());
    }
}