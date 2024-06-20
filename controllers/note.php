<?php

$config = require "../ele/config.php";

$db = new Database($config["filePath"]);

$id = $_GET['id'];

$query = "select * from notes where id = :id";

$note = $db->query($query, [$id])->fetch();

// dd($notes);

require "./views/note.view.php";
