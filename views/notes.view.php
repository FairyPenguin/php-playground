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
</style>

<body>



<div>-*--*--*--*--*--*-</div>
<br>
<?php foreach ($notes as $note): ?>
  <!-- // code... -->


<li>
    <a href="/note?id=<?=$note["id"]?>">
    <?=$note["body"]?>
    </a>
</li>
<br>

<?php endforeach;?>



<?php foreach ($variable as $key => $value): ?>

<?php endforeach?>




<br>
<div>-*--*--*--*--*--*-</div>

</body>
</html>




