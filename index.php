<?php 
$pageTitle = "Unique T-shirts designed by a cat"; 
include('includes/header.php'); ?>

		<div class="section banner">

			<div class="wrapper">

				<img class="hero" src="img/mike-the-frog.png" alt="Mike the Frog says:">
				<div class="button">
					<a href="shirts.php">
						<h2>Hey, I'm Syd!</h2>
						<p>Check Out My Shirts</p>
					</a>
				</div>
			</div>

		</div>

		<div class="section shirts latest">

			<div class="wrapper">

				<h2>Syd's Best-Selling Shirts</h2>

					<?php include("includes/products.php"); ?>
					<ul class="products">
						<?php

						$total_products = count($products);
						$position = 0;
						$list_view_html = "";
						foreach($products as $product_id => $product) { 
							$position = $position + 1;
							if ($total_products - $position > 3) {
								$list_view_html = get_list_view_html($product_id, $product) . $list_view_html;
							}
						}
						echo $list_view_html;
					?>		
				</ul>

			</div>

		</div>

	</div>

<?php include('includes/footer.php'); ?>