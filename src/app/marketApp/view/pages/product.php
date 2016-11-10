<?php $image = !empty($products[$key]['image']) ? $products[$key]['image'] : '/images/icons/bag.png' ; ?>
<div class="container">
    <h1><?php echo $title?></h1>
	<div class="product-item">
		<img src="<?php echo $image; ?>">
		<p id="text1"><?php echo $description; ?></p>
		<div class="price">
			<div class="price-value">
				<?php echo 'Price: ' . $price; ?>
			</div>
			<div class="price-img">
			<img src="/images/icons/coin.png">
			</div>
		</div>
    </div>
</div>