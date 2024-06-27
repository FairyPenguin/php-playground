<?php

$config = require "../ele/config.php";

$db = new Database($config["filePath"]);

$query = "select * from notes";

$notes = $db->query($query, [])->findAllOrAbort();

// dd($notes);

require "./views/notes/index.view.php";
