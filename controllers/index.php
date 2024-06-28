<?php

use Core\Database;

$config = require "../config.php";

$db = new Database($config["filePath"]);

$query = "select * from notes";

$notes = $db->query($query, [])->findAllOrAbort();

// require view("notes/index.view.php", ["notes" => $notes]);

view("notes/index.view.php", ["notes" => $notes]);

// require view("index.view.php");
