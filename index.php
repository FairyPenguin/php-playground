<?php
//Array
$books = ["Book__1", "Book__2", "Book__3"];

$post = ["title" => "post1", "author" => "author of the post"];

$confiremd = false;

if (!$confiremd) {
    # code...
    echo "This appointment has not yet been confirmed";
}
;

echo $post["title"];
// Assoicative Array

$booksData = [
    [
        "id" => 3, "name" => "BOOK_1", "Author" => "unknown",
    ], [
        "id" => 4, "name" => "BOOK_2", "Author" => "unknown",
    ],
    [
        "id" => 5, "name" => "BOOK_3", "Author" => "unknown2",
    ],
    [
        "id" => 1, "name" => "BOOK_4", "Author" => "unknown2",
    ],
    [
        "id" => 2, "name" => "BOOK_5", "Author" => "unknown3",
    ],
    [
        "id" => 3, "name" => "BOOK_6", "Author" => "unknown3",
    ],
];

function filter($itemsArray, $fn)
{
    $filteredBooks = [];

    foreach ($itemsArray as $item) {
        # code...
        if ($fn($item)) {
            # code...
            $filteredBooks[] = $item;
        }

    }

    return $filteredBooks;
}

//Anonymous Function == Lambda Function
$filterByBook = function ($booksArray, $author) {
    $filteredBooks = [];

    foreach ($booksArray as $book) {
        # code...
        if ($book["Author"] === $author) {
            # code...
            $filteredBooks[] = $book;
        }

    }

    return $filteredBooks;
};

$filteredBooks = filter($booksData, function ($book) {

    return $book["Author"] === "unknown";

});

$filterdBooksBuiltin = array_filter($booksData, function ($book) {
    return $book["Author"] === "unknown";
});

require "./views/index.view.php";
