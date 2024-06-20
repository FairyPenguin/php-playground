<?php

$config = require "../ele/config.php";

$db = new Database($config["filePath"]);

$query = "select * from notes";

$notes = $db->query($query, [])->fetchAll();

// dd($notes);

require "./views/notes.view.php";
