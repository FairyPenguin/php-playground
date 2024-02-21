<?php

require "./functions.php";

require "./router.php";

require "./Databse.php";

class Person
{
    public $name;
    public $age;

    public function toDo()
    {
        echo "todo list of" . " " . $this->name;
    }
};

$person = new Person();

$person->name = "Mahmoud";
$person->age = 24;

// dd($person);
// dd($person->name);
// dd($person->toDo());

if (file_exists($dbFile)) {
    # code...
    echo "YESSSSS Exists";
}
;

// foreach ($db->query($query) as $row) {
//     echo "<br>" . $row["title"];
//     // echo $row[1];
// }

$config = require "../ele/config.php";

$db = new Database($config["filePath"]);

$posts = $db->query("select * from post")->fetchAll();

foreach ($posts as $post) {
    # code...
    echo "<li>" . $post["id"] . "</li>";
    echo "<li>" . $post["title"] . "</li>";
}

// dd($posts);

// phpinfo();
