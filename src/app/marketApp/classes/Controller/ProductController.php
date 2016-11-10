<?php
/**
* 
*/
class ProductController extends Controller
{
	public function indexAction($request)
	{
		$dbConnection = $this->application->getDbConnection();
		$catId = $request['catId'];
		$prodId = $request['prodId'];
		$product = new Product($prodId);
		$product->create($dbConnection);
		$title = $product->getTitle();
		$description = $product->getDescription();
		$image = $product->getImage();
		$price = $product->getPrice();
		$this->render('pages:product', ['title' => $title, 'description' => $description, 'image' => $image, 'price' => $price]);
	}
}
