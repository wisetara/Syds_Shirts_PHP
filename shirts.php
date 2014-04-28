<?php

$products = array();
	$products[108] = array(
		"name" => "Coffee, Brown",
		"img" => "img/shirts/shirt-108.jpg",
		"price" => 18
	);
	$products[107] = array(
		"name" => "Heterosectional, Yellow",
		"img" => "img/shirts/shirt-107.jpg",
		"price" => 18
	);
	$products[106] = array(
		"name" => "Understand, Pastel Yellow",
		"img" => "img/shirts/shirt-106.jpg",
		"price" => 18
	);	
	$products[105] = array(
		"name" => "Capybara, Sand",
		"img" => "img/shirts/shirt-105.jpg",
		"price" => 18		
	);
	$products[104] = array(
		"name" => "Expert, Black",
		"img" => "img/shirts/shirt-104.jpg",
		"price" => 18
	);
	$products[103] = array(
		"name" => "Recursion, Black",
		"img" => "img/shirts/shirt-103.jpg",
		"price" => 18
	);
	$products[102] = array(
		"name" => "Protagonist, Black",
		"img" => "img/shirts/shirt-102.jpg",
		"price" => 18
	);	
	$products[101] = array(
		"name" => "Heterosexuality, Black",
		"img" => "img/shirts/shirt-101.jpg",
		"price" => 18		
	);	
?>

<?php 
$pageTitle = "Syd's Full Catalog of Shirts";
$section = "shirts";
include('includes/header.php'); ?>

	<div class="section shirts page">

		<div class="wrapper">

			<h1>Syd's Full Catalog of Shirts</h1>

			<ul class="products">
				<?php foreach($products as $product) { 
					echo "<li>";
					echo '<a href="#">';
					echo '<img src="' . $product["img"] . '" alt="' . $product["name"] . '">'; 
					echo "<p>View Details</p>";
					echo "</a>";
					echo "</li>";
					}
				?>
			
			</ul>

		</div>

	</div>

<?php include('includes/footer.php'); ?>