<?php

namespace Behavioral\mediator;

class User
{
    private $groupChats = [];

    public function __construct(
        protected readonly string $name
    ){}

    public function joinGroupChat(GroupChat $groupChat, GroupChatMediatorInterface $mediator): void
    {
        // Add user to the group chat via the mediator
        $mediator->addUserToGroupChat($this, $groupChat);
        // Add the group chat to the user's list of group chats
        $this->groupChats[] = $groupChat;
    }

    public function sendMessageToGroupChat(GroupChat $groupChat, GroupChatMediatorInterface $mediator, mixed $message): void
    {
        // Send message to the group chat via the mediator
        $mediator->sendMessageToGroupChat($this, $groupChat, $message);
    }

    public function receiveMessage($message): void
    {
        // Print out the received message
        echo "{$this->name} received message: {$message}\n";
    }
}