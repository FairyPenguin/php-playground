<?php

require "./functions.php";

require "./router.php";

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

$query = "SELECT * FROM post";
$dbFile = "./db/php.db";

if (file_exists($dbFile)) {
    # code...
    echo "YESSSSS Exists";
}
;

$db = new PDO("sqlite:$dbFile");

// foreach ($db->query($query) as $row) {
//     echo "<br>" . $row["title"];
//     // echo $row[1];
// }

$statement = $db->prepare("select * from post");

$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    # code...
    echo "<li>" . $post["id"] . "</li>";
    echo "<li>" . $post["title"] . "</li>";
}

// dd($posts);

// phpinfo();
