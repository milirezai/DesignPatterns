<?php

namespace Behavioral\observer;

use SplSubject;

class NewsSubscriber implements \SplObserver
{

    public function __construct(
        protected readonly string $name
    ){}

    /**
     * @inheritDoc
     */
    public function update(SplSubject $subject): void
    {
        $articles = $subject->getArticles();
        echo "Hello {$this->name}, the following articles have been published:\n";
        foreach ($articles as $article) {
            echo "- {$article['title']} : {$article['content']}\n";
        }
        echo "\n";
    }
}