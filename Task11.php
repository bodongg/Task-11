<?php

class Book{
    public $title;
    public $author;
    public $year;
    public $isAvailable = true;

    public function __construct($title, $author, $year){
        $this->title =$title;
        $this->author =$author;
        $this->year =$year;
    }
    public function borrowBook(){
        $this->isAvailable = false;
        echo $this->title . " has been borrowed. <br>";
    }

    public function returnBook(){
        $this->isAvailable = true;
        echo $this->title . " has been returned. <br>";
    }

    public function displayInfo(){
        echo "Title: " . $this->title . "<br>";
        echo "Author: " . $this->author . "<br>";
        echo "Year: " . $this->year . "<br>";
        echo "Availability: " . ($this->isAvailable ? "Available ✅" : "Not Available ❌") . "<br> <br>";
    }

}
$book1 = new Book ("Diary of Wimpy Kid ", "Jeff Kinney", 2004);
    $book1->displayInfo();

    $book1->borrowBook();
    $book1->displayInfo();

    $book1->returnBook();
    $book1->displayInfo();
?>