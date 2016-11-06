<?php
class Catalogue
{
	protected $catalogue;

	public function __construct($dbConnection)
	{
		if (!$dbConnection) {
		return [];
		}
		$statement = $dbConnection->query('SELECT * FROM category');
		$statement->setFetchMode(PDO::FETCH_ASSOC);
		$this->catalogue = $statement->fetchAll();
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
}