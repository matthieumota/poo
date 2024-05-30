<?php

class Library
{
    private array $books = [];

    public function books(): array
    {
        return $this->books;
    }

    public function count(): int
    {
        return count($this->books);
    }

    public function totalPages(): int
    {
        $total = 0;

        foreach ($this->books() as $book) {
            $total += $book->countPages();
        }

        return $total;
    }

    public function addBook(Book $book): Library
    {
        $this->books[] = $book;

        return $this;
    }

    public function addBooks(array $books): Library
    {
        foreach ($books as $book) {
            $this->addBook($book);
        }

        return $this;
    }

    public function getBook(string $title): ?Book
    {
        foreach ($this->books as $book) {
            if (str_contains(strtolower($book->getName()), strtolower($title))) {
                return $book;
            }
        }

        return null;
    }

    public function findBooksByLetter(string $letter): array
    {
        $result = [];

        foreach ($this->books as $book) {
            if (substr(strtolower($book->getName()), 0, 1) === strtolower($letter)) {
                $result[] = $book;
            }
        }

        return $result;
    }

    public function randomBook(): ?Book
    {
        if (empty($this->books)) {
            return null;
        }

        return $this->books[array_rand($this->books)];
    }
}
