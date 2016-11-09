<?php

/**
* 
*/
class CategoryController extends Controller
{
	
	public function indexAction($request)
		{
			$dbConnection = $this->application->getDbConnection();
			$catId = $request['catId'];
			$category = new Category($catId);
			$category->createCategory($dbConnection);
			$category->createProducts($dbConnection);
			$products = $category->getProducts();
			$this->render('pages:category', ['products' => $products]);
		}

}
