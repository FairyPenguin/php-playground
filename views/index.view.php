<!DOCTYPE html>
<html lang="en">
<head>
<title>Document</title>
<style>

body{
  	font-family: Verdana, sans-serif;
	display:flex;
	justify-content:center;
	align-items:center;
	/* height:100%; */
	flex-direction:column;
	margin-top: 1rem;
	padding-top: 1rem;
}

li{
	list-style:none;
	font-size: 1.9rem;
}

ul{
	display:flex;
	gap:1rem
}


.current{
font-weight: bold;
color:darkgreen
}

.link{
	list-style: none;
	color:black
}

</style>
</head>
<body>
<br/>
<br/>
<?php

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

// $name = "Laravel";
// $track = "";

// if ($name === "Laravel") {
//     # code...
//     $track = "Frontend";
// } else {
//     $track = "";
// }
// ;
// $name;
// echo "<h1>$track $name Guide</h1>";
// echo "Hello world!<br>";

/**
 * Named Function
 */

// echo "<pre>";

// var_dump($_SERVER);

// echo "</pre>";

// die();

// var_dump(["string", "number"]);

?>


<?php require "./views/partials/nav.php"?>




<!-- <ul>
<?php foreach ($booksData as $book): ?>

<?php if ($book["Author"] === "unknown"): ?>


<li><?=$book["name"]?></li>


<?php endif?>

<?php endforeach;?>
</ul> -->



<div>
 <!-- Syntax Sugar for echo -->
</div>

<!-- <h3><?=$books[0]?></h3>
<h3><?=$books[1]?></h3>
<h3><?=$books[2]?></h3> -->

<!-- <ul>
<?php foreach ($books as $book) {
    echo "<li>{$book} from books list</li>";
    echo "<li>" . $book . "</li>";
}
;?>
</ul> -->



<!-- <ul>
<?php foreach ($books as $book): ?>

	<li><?php echo $book ?></li>
	<li><?=$book?></li>

<?php endforeach;?>
</ul> -->


<ul>

</ul>



</body>
</html>

