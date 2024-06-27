<?php

$routes = require "./routes.php";
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

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        # code...
        require $routes[$uri];

    } else {
        abort();
    }
}

function abort($status_code = 404)
{
    http_response_code($status_code);

    require "./views/{$status_code}.php";

    die();
};

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

routeToController($uri, $routes);
