<?php

namespace Behavioral\observer;

use SplObserver;

class NewsPublisher implements \SplSubject
{

    private SplObjectStorage $observers;
    private array $articles;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
        $this->articles = [];
    }
    /**
     * @inheritDoc
     */
    public function attach(SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    /**
     * @inheritDoc
     */
    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    /**
     * @inheritDoc
     */
    public function notify(): void
    {
        foreach ($this->observers as $observer){
            $observer->update($this);
        }
    }

    public function publishArticle($title, $content): void
    {
        $this->articles[] = [
            'title' => $title,
            'content' => $content,
        ];

        $this->notify();
    }

    public function getArticles(): array
    {
        return $this->articles;
    }
}