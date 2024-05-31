<?php

class Book implements Countable, Serializable
{
    private string $title;
    private int $pages;
    private array $authors;

    public function __construct(string $title, int $pages, array $authors)
    {
        $this->title = $title;
        $this->pages = $pages;
        $this->authors = $authors;
    }

    public function count(): int
    {
        return $this->pages;
    }

    public function serialize()
    {
        return serialize($this->title);
    }

    public function unserialize($data)
    {
        $this->title = unserialize($data);
    }
}
