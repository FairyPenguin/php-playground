<!DOCTYPE html>
<html lang="en">
<head>
<title>Document</title>
<style>
	body{
display:flex;
justify-content:center;
align-items:center;
height:100vh;
flex-direction:column;
}
</style>
</head>
<body>






<?php
$books = ["Book__1", "Book__2", "Book__3"];
// echo "<h2>PHP is Fun!</h2>";
// echo "Hello world!<br>";
// echo "This is just text with echo no HTM<br>";
// echo "I'm about to learn PHP!<br>";
// echo "This ", "string ", "was ", "made ", "with multiple parameters.<br>";
// $name = "mahmoud is here<br>";
// echo "$name A<br>";
// echo "$name";
// $books = ["book1", "book2", "book3"];

// echo "$books[0], $books[1], $books[2]";
// foreach ($books as $book) {
//     // code...
//     echo "<li> $book </li>";
// }
// echo "<h1>+-+-+-+-+-+-+-+-+-+-+-+-+</h1>"

$name = "Laravel";
$track = "";

if ($name === "Laravel") {
    # code...
    $track = "Frontend";
} else {
    $track = "";
}
;
$name;
echo "<h1>$track $name Guide</h1>";
echo "Hello world!<br>";
?>

<div>
<?=$name
// <!-- Syntax Sugar for echo -->
?>
</div>

<ul>
<?php foreach ($books as $book) {
    echo "<li>{$book} from books list</li>";
    echo "<li>" . $book . "</li>";
}
;?>
</ul>

<ul>
<?php foreach ($books as $book): ?>

	<li><?php echo $book ?></li>
	<li><?=$book?></li>

<?php endforeach;?>
</ul>

</body>
</html>
