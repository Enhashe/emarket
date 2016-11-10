<?php 
$catalogueMenu = '';
foreach ($viewCatalogue as $key => $value) {
	$categoryId = $viewCatalogue[$key]['id'];
	$categoryTitle = $viewCatalogue[$key]['title'];
	$catalogueMenu .= <<<EOD
	<li>
	<a href="/catalogue/$categoryId">$categoryTitle</a>
	</li>
EOD;
}
echo $catalogueMenu;
