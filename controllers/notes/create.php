<?php

require "../ele/Validator.php";

$config = require "../ele/config.php";

$db = new Database($config["filePath"]);

if ($_SERVER['REQUEST_METHOD'] === "POST") {
	// code...

	// Input Validation

	$errors = [];

	$noteBodyInputValue = $_POST['body'];

	// dd($noteBodyInputValue);

	if (!Validator::stringValidation($noteBodyInputValue, 1, 500)) {
		// code...
		$errors['body'] = "A text-body required *Maximum 500 chars*";

	}

	if (empty($errors)) {
		// code...

		$query = "insert into notes(body,user_id) values(:body,:user_id)";

		$createNote = $db->query($query, ["body" => $noteBodyInputValue, "user_id" => 2]);

	}

}

// dd($post);

require "./views/notes/create.view.php";