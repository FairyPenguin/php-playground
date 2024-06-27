<?php

require "views/partials/nav.php"
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
    }

    .create__note__btn{
all: unset;

    }

    .create__note__btn a{
    text-decoration: none;
    color: hsl(0.0, 59.4%, 40.6%);
    font-size: 1.45rem;
    font-weight: bold;
    width: 100%;
          border: none;
       outline: none;
       padding-block: 1rem;
       padding-inline: 1.23rem;
       border-radius: 1rem;
       background: hsl(0.0, 0.0%, 70.2%)
    }
    .btn__wrapper{
        padding-block:1.65rem;
    }
</style>

<body>



<div>-*--*--*--*--*--*-</div>
<br>
<section class="btn__wrapper">
    <button class="create__note__btn">
        <a href="/notes/create">
           📝 Create Note
        </a>
    </button>
</section>

<?php foreach ($notes as $note): ?>
  <!-- // code... -->
<ul>
    <li>
    <a href="/note?id=<?=$note["id"]?>">
    <?=htmlspecialchars($note["body"])?>
    </a>
</li>

</ul>

<?php endforeach;?>


<br>


<br>
<div>-*--*--*--*--*--*-</div>

</body>
</html>




