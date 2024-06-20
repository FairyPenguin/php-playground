<?php
class Database {

	// connection property
	public $connection;

	// __constructer
	public function __construct($filePath) {

		$this->connection = new PDO("sqlite:$filePath", " ", "", [
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		]);

	}

	// Function Query
	public function query($query, $params = []) {

		$statement = $this->connection->prepare($query);

// the query params passed as parameter to protect against SQL injection
		$statement->execute($params);

		return $statement;
		// ->fetchAll(PDO::FETCH_ASSOC);

	}
}
