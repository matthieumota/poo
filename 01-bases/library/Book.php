<?php

class Book
{
    private string $title;
    private int $pages = 0;
    private int $currentPage = 1;

    public function __construct(string $t, int $p)
    {
        $this->title = $t;
        $this->pages = $p;
    }

    public function getName(): string
    {
        return $this->title;
    }

    public function countPages(): int
    {
        return $this->pages;
    }

    public function page(): int
    {
        return $this->currentPage;
    }

    public function nextPage(): void
    {
        $this->currentPage++;
    }

    public function close(): void
    {
        $this->currentPage = 1;
    }
}
