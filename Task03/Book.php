<?php

class Book
{
    private static $lastId = 1;
    private $id;
    private $title;
    private $authors;
    private $publisher;
    private $year;

    public function __construct($id=0, $title="", $authors=array(), $publisher="", $year=0 )
    {
        $this->id = self::$lastId++;
		$this->setTitle($title)->setAuthors($authors)->setPublisher($publisher)->setYear($year);
    }

    public function setTitle($title): Book
    {
        $this->title = $title;
<<<<<<< HEAD
=======

>>>>>>> student/Task04
        return $this;
    }

    public function setAuthors($authors): Book
    {
        $this->authors = $authors;
<<<<<<< HEAD
=======

>>>>>>> student/Task04
        return $this;
    }

    public function setPublisher($publisher): Book
    {
        $this->publisher = $publisher;
<<<<<<< HEAD
=======

>>>>>>> student/Task04
        return $this;
    }

    public function setYear($year): Book
    {
        $this->year = $year;
<<<<<<< HEAD
=======

>>>>>>> student/Task04
        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthors(): array
    {
        return $this->authors;
    }

    public function getPublisher(): string
    {
        return $this->publisher;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function __toString(): string
    {
        $authorsArray = $this->authors;
        $authors = "";
        for ($i = 0; $i < count($authorsArray); $i++) {
<<<<<<< HEAD
            $authors.= "Автор".($i + 1).": ".$authorsArray[$i].PHP_EOL;
        }
        return "Id: {$this->id}".PHP_EOL .
            "Название: {$this->title}".PHP_EOL .
            $authors.
            "Издательство: {$this->publisher}".PHP_EOL .
            "Год: {$this->year}".PHP_EOL;
=======
            $authors .= "Автор" . ($i + 1) . ": " . $authorsArray[$i] . PHP_EOL;
        }

        return "Id: {$this->id}" . PHP_EOL .
            "Название: {$this->title}" . PHP_EOL .
            $authors .
            "Издательство: {$this->publisher}" . PHP_EOL .
            "Год: {$this->year}" . PHP_EOL;
>>>>>>> student/Task04
    }
}