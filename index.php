<?php

require "./functions.php";
require "./Databse.php";
require "./ResponseCodes.php";
require "./router.php";

$config = require "../ele/config.php";

$db = new Database($config["filePath"]);

// $id = $_GET["id"];

$query = "select * from posts where id = :id";

// $posts = $db->query($query, [$id])->fetch();

// foreach ($posts as $post) {
// 	# code...
// 	echo "<li>" . "id-> " . $post["id"] . "</li>";
// 	echo "<br>";
// 	echo "<li>" . $post["title"] . "</li>";
// 	echo "<br>";
// }

// dd($posts);

// phpinfo();
