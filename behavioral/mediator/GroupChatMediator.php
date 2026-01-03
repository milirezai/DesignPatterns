<?php

namespace Behavioral\mediator;

use Behavioral\mediator\GroupChatMediatorInterface;

class GroupChatMediator implements GroupChatMediatorInterface
{

    public function addUserToGroupChat(User $user, GroupChat $groupChat)
    {
       $groupChat->addUser($user);
    }

    public function sendMessageToGroupChat(User $user, GroupChat $groupChat, mixed $message)
    {
        $groupChat->sendMessage($user,$message);
    }
}