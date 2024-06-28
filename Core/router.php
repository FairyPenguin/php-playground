<?php

$routes = require base_path("routes.php");

function routeToController($uri, $routes) {
	if (array_key_exists($uri, $routes)) {
		# code...
		require base_path($routes[$uri]);

	} else {
		abort();
	}
}

function abort($status_code = 404) {
	http_response_code($status_code);

	require base_path("/views/{$status_code}.php");

	die();
};

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

routeToController($uri, $routes);
