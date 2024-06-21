<?php
// var_dump(get_included_files());
$config = require "../ele/config.php";

$db = new Database($config["filePath"]);

$id = $_GET['id'];

$query = "select * from notes where user_id = :userId and id = :id";

$note = $db->query($query, ["id" => $id, "userId" => 2])->fetch();

// dd($notes);

require "./views/note.view.php";

// var_dump(get_defined_vars());