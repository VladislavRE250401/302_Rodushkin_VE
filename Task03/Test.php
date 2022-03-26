<?php

function runTest()
{
    $book1 = new Book(1, "PHP forever", array("Gates B.", "Smith J."), "O'Reily", 2020);
    $book2 = new Book(2, "Метро 2033", array("Дмитрий Глуховский"), "Эксмо", 2005);
    $book3 = new Book(3, "The Picture of Dorian Gray", array("Oscar Wilde"), "Lippincott's Monthly Magazine", 1890);
    $bookslist = new BooksList();
<<<<<<< HEAD
	//$bookslist->load('books.txt');
=======
>>>>>>> student/Task04
    $bookslist->add($book1);
    $bookslist->add($book2);
    $bookslist->add($book3);
    $bookslist->store('books.txt');
<<<<<<< HEAD
=======
    //$bookslist->load('books.txt');
>>>>>>> student/Task04
    echo $bookslist->get(2)->__toString();
}
