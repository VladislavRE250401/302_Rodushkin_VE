<?php

class BooksList
{
    private $books;

    public function add(Book $book): BooksList
    {
        $this->books[] = $book;
<<<<<<< HEAD
=======

>>>>>>> student/Task04
        return $this;
    }

    public function count(): int
    {
        return count($this->books);
    }

    public function get(int $n): Book
    {
        return $this->books[$n - 1];
    }

    public function store(string $fileName)
    {
        file_put_contents($fileName, serialize($this -> books));
    }

    public function load(string $fileName)
    {
        if (!file_exists($fileName)) {
<<<<<<< HEAD
            return "Файл ".$fileName." не существует!";
        }
=======
            return "Файл " . $fileName . " не существует!";
        }

>>>>>>> student/Task04
        $this -> books = unserialize(file_get_contents($fileName));
    }
}