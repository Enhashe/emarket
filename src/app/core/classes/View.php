<?php

class View
{
	protected $pathToViews;
	protected $viewCatalogue;

	public function __construct($pathToViews, $viewCatalogue)
	{
		$this->pathToViews = $pathToViews;
		$this->viewCatalogue = $viewCatalogue;
	}

	public function render($viewName, array $parameters = [])
	{
		$subPathElements = explode(':', $viewName);
        $subPath = implode('/', $subPathElements) . '.php';
        $viewPath = rtrim($this->pathToViews, '/') . '/' . $subPath;
        $parameters['pathToView'] = $viewPath;
        $viewCatalogue = $this->viewCatalogue;
        extract($parameters);
        require $this->pathToViews . '/layout.php';
	}
}
