<?php

function dd($value)
{

    echo "<pre>";

    var_dump($value);

    echo "</pre>";

    die();

};

function authorize($condition, $statusCode = ResponseCode::Unauthorized)
{

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

function printPlus($value)
{

    echo "${value}";

}

function urlCheck($value)
{

    return $_SERVER["REQUEST_URI"] === $value;

};
