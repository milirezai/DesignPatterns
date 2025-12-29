<?php

namespace Behavioral\iterator;
use Countable;
use Iterator;

class UserList implements Countable, Iterator
{
    private array $users = [];
    private int $currentIndex = 0;

    public function add(User $user): void
    {
        $this->users[] = $user;
    }
    public function remove(User $user): bool
    {
        foreach ($this->users as $key => $rmUser){
            if ($rmUser === $user){
                unset($this->users[$key]);
                $this->users = array_values($this->users);
                return true;
            }
        }
        return false;
    }
    public function count(): int
    {
        return count($this->users);
    }

    public function current(): User
    {
        return $this->users[$this->currentIndex];
    }

    public function key(): int
    {
        return $this->currentIndex;
    }

    public function next(): void
    {
        $this->currentIndex++;
    }

    public function rewind(): void
    {
        $this->currentIndex = 0;
    }

    public function valid(): bool
    {
        return isset($this->users[$this->currentIndex]);
    }
}