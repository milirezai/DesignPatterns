<?php

namespace Behavioral\mediator;

require_once __DIR__.'/../../vendor/autoload.php';

class Client
{
    public static function handel(): void
    {
        $mediator = new GroupChatMediator();

        $groupChat1 = new GroupChat('group1');
        $groupChat2 = new GroupChat('group2');
        $groupChat3 = new GroupChat('group3');

        $user1 = new User(name: 'amir');
        $user2 = new User(name: 'sam');
        $user3 = new User(name: 'milad');

        $user1->joinGroupChat($groupChat1, $mediator);
        $user2->joinGroupChat($groupChat2, $mediator);
        $user3->joinGroupChat($groupChat3, $mediator);

        $user1->sendMessageToGroupChat($groupChat1,$mediator,'hi group chat 1');
        $user2->sendMessageToGroupChat($groupChat2,$mediator,'hi group chat 2');
        $user3->sendMessageToGroupChat($groupChat3,$mediator,'hi group chat 3');

    }
}

Client::handel();