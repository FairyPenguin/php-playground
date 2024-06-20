<?php

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

// dd($uri);

// if ($uri === "/") {
//     # code...
//     require "./controllers/index.php";
// } elseif ($uri === "/about") {
//     # code...
//     require "./controllers/about.php";
// } elseif ($uri === "/contact") {
//     require "./controllers/contact.php";
// }

$routes = [

	"/" => "./controllers/index.php",
	"/about" => "./controllers/about.php",
	"/contact" => "./controllers/contact.php",
	"/notes" => "./controllers/notes.php",
	"/note" => "./controllers/note.php",

];

function routeToController($uri, $routes) {
	if (array_key_exists($uri, $routes)) {
		# code...
		require $routes[$uri];

	} else {
		abort();
	}
}

function abort($status_code = 404) {
	http_response_code($status_code);

	require "./views/{$status_code}.php";

	die();
};

routeToController($uri, $routes);
