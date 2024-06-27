<?php

require "./views/partials/nav.php"
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
    }

    .body{
        display: block;
        margin-bottom: 1.5rem;
        font-size: 1.67rem;
    }

    .error{
        font-size: 1.25rem;
        color: indianred;
        font-weight: bold;
        font-style: italic;
    }

</style>

<body>

<br>
<div>-*--*--*--*--*--*-</div>
    <form method="POST">
        <label for="body">
            Note:
            <textarea id="body" class="body" name="body"
            ><?=$noteBodyInputValue ?? "";?></textarea>
        </label>

        <div>
                   <?php if (isset($errors["body"])): ?>
                <p class="error"><?=$errors["body"]?></p>
            <?php endif;?>
        </div>

        <button type="submit">📝 Create Note</button>
    </form>
<div>-*--*--*--*--*--*-</div>
<br>

<h1>Form</h1>
<br>


<br>
<div>-*--*--*--*--*--*-</div>

</body>
</html>




