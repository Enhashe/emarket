<div class="container">
            <h1><?php echo $title?></h1>
            <div class="catalog">
                <?php
					$output = '';
					foreach ($products as $key => $value) {
						$id = $products[$key]['id'];
						$cat_id =  $products[$key]['cat_id'];
						$title = $products[$key]['title'];
						$image = !empty($products[$key]['image']) ? $products[$key]['image'] : '/images/icons/bag.png' ;
						$description = $products[$key]['description'];
						$price = $products[$key]['price'];
						$output .= <<<EOD
						<a href="/catalogue/$cat_id/$id">	
						<div class="catalog-item">
							<h3>$title</h3>
							<img src="$image"><br>
							$description
							<div class="price">
								<div class="price-value">
									Price: $price
								</div>
								<div class="price-img">
								<img src="/images/icons/coin.png">
								</div>
							</div>
						</div>
							</a>
EOD;
					}
					echo $output;
					?>
            </div>
        </div>
