<?php
class Book {
    
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }
    
    public function getTitle() {
        return $this->title;
    }


    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    // Borrow a book (decrease available copies)
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
        } else {
            echo "No copies left of '{$this->title}' to borrow.\n";
        }
    }

    
    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {

    private $name;

    public function __construct($name) {
        $this->name = $name;
    }
    
    public function getName() {
        return $this->name;
    }

    public function borrowBook(Book $book) {
        $book->borrowBook();
        echo "{$this->name} borrowed '{$book->getTitle()}'\n";
    }
 
    public function returnBook(Book $book) {
        $book->returnBook();
        echo "{$this->name} returned '{$book->getTitle()}'\n";
    }
}


$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);


$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");


$member1->borrowBook($book1);
$member2->borrowBook($book2);


echo "\nAvailable Copies of '{$book1->getTitle()}': " . $book1->getAvailableCopies() . "\n";
echo "Available Copies of '{$book2->getTitle()}': " . $book2->getAvailableCopies() . "\n";

?>
