<?php
class Catalogue
{
	protected $catalogue;

	public function __construct()
	{
		
	}

	public function getCategory($name)
	{
		$category = [];
		$fullCatalogue = $this->catalogue;
		foreach ($fullCatalogue as $key => $value) {
			if ($fullCatalogue[$key]['title'] == $name) {
				$category = $value;
				break;
			}
		}
		return $category;
	}

	public function get($dbConnection)
	{
		$dbConnection = (isset($dbConnection)) ? $dbConnection : [] ;
		$statement = $dbConnection->query('SELECT * FROM category');
		$statement->setFetchMode(PDO::FETCH_ASSOC);
		$this->catalogue = $statement->fetchAll();
	}

	public function getFull()
	{
		$input = $this->catalogue;
		$result = [];
		foreach ($input as $key => $value) {
			 $result[$key] = $value;
		}
		return $result;
	}
}