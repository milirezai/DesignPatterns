<?php

namespace Behavioral\observer;

require_once __DIR__.'/../../vendor/autoload.php';

class Client
{
    public static function handel(): void
    {
        $publisher = new NewsPublisher();
        $subscriber1 = new NewsSubscriber('amir');
        $subscriber2 = new NewsSubscriber('sam');

        $publisher->attach($subscriber1);
        $publisher->attach($subscriber2);

        $publisher->publishArticle('title1','content1');
        $publisher->publishArticle('title2','content2');

        $publisher->notify();

        $publisher->detach($subscriber2);

        $publisher->notify();
    }
}

Client::handel();