<?php
class Database
{
    public $connection;
    public function __construct($filePath)
    {

        $this->connection = new PDO("sqlite:$filePath", " ", "", [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);

    }
    public function query($query)
    {
        $statement = $this->connection->prepare($query);

        $statement->execute();

        return $statement;
        // ->fetchAll(PDO::FETCH_ASSOC);

    }
}
