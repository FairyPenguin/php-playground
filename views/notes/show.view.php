<?php

require "../views/partials/nav.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style type="text/css">
    body{
    font-family: Verdana, sans-serif;
    background-color: black;
    color: grey;
    }

</style>

<body>



<div>-*--*--*--*--*--*-</div>
<br>



<p>
    <?=htmlspecialchars($note["body"])?>
</p>
<br>




<br>
<div>-*--*--*--*--*--*-</div>

</body>
</html>




