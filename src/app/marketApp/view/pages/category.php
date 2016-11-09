<div class="container">
            <h1>Catalogue</h1>
            <div class="catalog">
                <?php
					$output = '';
					foreach ($products as $key => $value) {
						$id = $products[$key]['id'];
						$cat_id =  $products[$key]['cat_id'];
						$title = $products[$key]['title'];
						$description = $products[$key]['description'];
						$price = $products[$key]['price'];
						$output .= <<<EOD
							<a href="/catalogue/$cat_id/$id">	
								<div class="catalog-item">
								<h3>$title</h3>
								</div>
							</a>
EOD;
					}
					echo $output;
					?>
            </div>
        </div>
