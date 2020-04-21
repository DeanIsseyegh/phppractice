<?php

require_once("Book.php");
require_once("LibraryCard.php");

$book = new Book("The Adventures of Claudia and her Doggie", "once upon a time");
$book->read();

echo "\n";

$book = new LibraryCard("Claudia", "Date of Birth: August 14th 1992");
$book->read();

echo "\n";

?>