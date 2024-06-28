<?php

use Core\ResponseCode;

function dd($value) {

	echo "<pre>";

	var_dump($value);

	echo "</pre>";

	die();

};

function authorize($condition, $statusCode = ResponseCode::Unauthorized) {

	if (!$condition) {
		// code...
		abort(ResponseCode::Unauthorized);
	}
}

function newLineBreak(
	$value = "ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ"
) {
	echo "<br>";
	// ------------New Line------------
	echo $value;
	// ------------New Line------------
	echo "<br>";
};

function printPlus($value) {

	echo "${value}";

}

function urlCheck($value) {

	return $_SERVER["REQUEST_URI"] === $value;

};

function base_path($path) {
	return BASE_PATH . $path;
}

// Loads a View

function view($path, $attributes = []) {

	extract($attributes);
	require base_path('views/' . $path);
}
