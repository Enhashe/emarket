<?php
/**
* 
*/
class ProductController extends Controller
{
	public function indexAction($request)
	{
		$dbConnection = $this->application->getDbConnection();
		$cat_id = $request['catId'];
		$prodId = $request['prodId'];
		$product = new Product($prodId);
		$product->create($dbConnection);
		$category = new Category($cat_id);
		$category->createCategory($dbConnection);
		$catTitle = $category->getTitle();
		$title = $product->getTitle();
		$description = $product->getDescription();
		$image = $product->getImage();
		$price = $product->getPrice();
		$this->render('pages:product', ['title' => $title, 'description' => $description, 'image' => $image, 'catTitle' => $catTitle, 'price' => $price]);
	}
}
