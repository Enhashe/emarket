<?php
/**
* 
*/
class Category
{
	protected $id;
	protected $title;
	protected $description;
	protected $products;

	function __construct($id)
	{
		$this->id = $id;
	}

	public function createCategory($dbConnection)
	{
		$id = $this->id;
		$dbConnection = (isset($dbConnection)) ? $dbConnection : [] ;
		$sqlQuery = <<<SQL
		SELECT id, title, description
			FROM category
			WHERE id=$id
SQL;
		$statement = $dbConnection->query($sqlQuery);
		$statement->setFetchMode(PDO::FETCH_ASSOC);
		$categoryData = $statement->fetchAll();
		extract($categoryData[0]);
		$this->id = $id;
		$this->title = $title;
		$this->description = $description;
	}

	public function createProducts($dbConnection)
	{
		$id = $this->id;
		$dbConnection = (isset($dbConnection)) ? $dbConnection : [] ;
		$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sqlQuery = <<<SQL
		SELECT product.id, product.cat_id, product.title, product.description, product.image, product.price
			FROM category, product
			WHERE category.id=$id AND product.cat_id=category.id
SQL;
		$statement = $dbConnection->query($sqlQuery);
		$statement->setFetchMode(PDO::FETCH_ASSOC);
		$this->products = $statement->fetchAll();
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

	public function getProducts()
	{
		return $this->products;
	}
}
