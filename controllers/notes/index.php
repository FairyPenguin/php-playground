<?php

use Core\Database;

$config = require "../config.php";

$db = new Database($config["filePath"]);

$query = "select * from notes";

$notes = $db->query($query, [])->findAllOrAbort();

require "../views/notes/index.view.php";
