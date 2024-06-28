<?php

namespace Core;

use PDO;

class Database {
	// connection property
	public $connection;
	// statement property
	public $statement;

	// __constructer
	public function __construct($filePath) {

		$this->connection = new PDO("sqlite:$filePath", " ", "", [
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		]);

	}

	// Function Query
	public function query($query, $params = []) {

		$this->statement = $this->connection->prepare($query);

		// the query params passed as parameter to protect against SQL injection
		$this->statement->execute($params);

		return $this;
	}

	public function find() {

		return $this->statement->fetch();

	}

	public function findAll() {

		return $this->statement->fetchAll();
	}

	public function findAllOrAbort() {

		$result = $this->findAll();

		if (!$result) {
			// code...
			abort();
		};

		return $result;
	}

	public function findOrAbort() {

		$result = $this->find();
		if (!$result) {
			// code...
			abort();
		}

		return $result;
	}

	//Class End ---------|
}
