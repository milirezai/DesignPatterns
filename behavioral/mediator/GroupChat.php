<?php

namespace Behavioral\mediator;

class GroupChat
{
    protected array $users = [];
    public function __construct(
        protected readonly string $name
    ){}

    public function addUser(User $user): void
    {
        $this->users[] = $user;
    }
    public function sendMessage(User $user, mixed $message): void
    {
        foreach ($this->users as $client){
            if ($user != $client)
                $client->receiveMessage($message);
        }
    }
}