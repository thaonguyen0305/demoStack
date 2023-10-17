<?php

include_once "./Book.php";

$book = new Book(3);
$book->push("Toán");
$book->push("Tiếng việt");
$book->push("Địa lý");
$book->push("Lịch sử");
$topitem = $book->top();
var_dump($topitem);
var_dump($book);