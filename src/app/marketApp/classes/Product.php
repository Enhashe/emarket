<?php

/**
* 
*/
class Product
{
	protected $id;
	protected $title;
	protected $description;
	protected $image;
	protected $price;

	function __construct($id)
	{
		$this->id = $id;
	}

	public function create($dbConnection)
	{
		$id = $this->id;
		$dbConnection = (isset($dbConnection)) ? $dbConnection : [] ;
		$sqlQuery = <<<SQL
		SELECT id, title, description, price
			FROM product
			WHERE id=$id
SQL;
		$statement = $dbConnection->query($sqlQuery);
		$statement->setFetchMode(PDO::FETCH_ASSOC);
		$categoryData = $statement->fetchAll();
		extract($categoryData[0]);
		$this->id = $id;
		$this->title = $title;
		$this->description = $description;
		$this->price = $price;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function getImage()
	{
		return $this->image;
	}

	public function getPrice()
	{
		return $this->price;
	}
}