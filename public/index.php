<?php

const BASE_PATH = __DIR__ . "/../";

// var_dump(BASE_PATH);

require BASE_PATH . "Core/functions.php";

// require base_path("Databse.php");
// require base_path("ResponseCodes.php");

// Python/php/ele/public/../Database.php
// /php/ele/Databse.php
spl_autoload_register(function ($class) {

	$class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
	require base_path($class . ".php");
});

require base_path("Core/router.php");

$config = require "../config.php";

// $db = new Database($config["filePath"]);

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
