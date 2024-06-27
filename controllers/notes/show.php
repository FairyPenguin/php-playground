<?php

// var_dump(get_included_files());
$config = require "../ele/config.php";

$db = new Database($config["filePath"]);

$id = $_GET['id'];

// $query = "select * from notes where user_id = :userId and id = :id";

$query = "select * from notes where id = :id";

$note = $db->query($query, ["id" => $id])->findOrAbort();

// print_r($note);

$currentUserId = 2;

authorize($note["user_id"] === $currentUserId);

// if ($note["user_id"] !== $currentUserId) {
// 	// code...
// 	abort(ResponseCode::Unauthorized);
// }

require "./views/notes/show.view.php";

// var_dump(get_defined_vars());

$rawData = "traversyphp";

$books = ["Book__1", "Book__2", "Book__3"];

foreach ($books as $book) {
	// code...
	newLineBreak($book);

}
;

// This version shows the index 0 1 2 3 4 5 6

foreach ($books as $key => $book) {
	// code...
	echo "<br>";
	echo "Index: ${key} Book => ${book} ";
	echo "<br>";

}

newLineBreak();

$mapMethod = array_map(function ($book) {
	return "Book Mapped to ${book}";
}, $books);

print_r($mapMethod);

newLineBreak();

print_r($books);

try {
	echo "string";

} catch (Exception $e) {

	echo 'Error:', $e->getMessage();
}
