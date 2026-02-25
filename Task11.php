<?php

class Book {
    private $title;
    private $author;
    private $year;
    private $isAvailable;

    public function __construct($title, $author, $year) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->isAvailable = true; 
    }

    public function borrow() {
        if ($this->isAvailable) {
            $this->isAvailable = false;
            echo "You've successfully borrowed: {$this->title} <br>";
        } else {
            echo "Sorry, {$this->title} is already borrowed. <br>";
        }
    }

    public function returnBook() {
        $this->isAvailable = true;
        echo "{$this->title} has been returned to the library. <br>";
    }

    public function display() {
        echo "Book Details: <br>";
        echo "Title: {$this->title} <br>";
        echo "Author: {$this->author} <br>";
        echo "Published Year: {$this->year} <br>";
        echo "Status: " . ($this->isAvailable ? 'Available ✅' : 'Not Available ❌') . "<br><br>";
    }
}
$book1 = new Book("Diary of a Wimpy Kid", "Jeff Kinney", 2004);
$book1->display();

$book1->borrow();
$book1->display();

$book1->returnBook();
$book1->display();

?>
