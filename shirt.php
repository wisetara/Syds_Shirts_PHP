<?php  include("includes/products.php"); 

if (isset($_GET["id"])) {
	$product_id = $_GET["id"];
	if (isset($products[$product_id])) {
		$product = $products[$product_id];
	}
}
if (!isset($product)) {
	header("Location: shirts.php");
	exit();
}

$section = "shirts";
$pageTitle = $product["name"];
include("includes/header.php");

?>

	<div class="section page">
		<div class="wrapper">
			<div class="breadcrumb"><a href="shirts.php">Shirts</a> &gt; <?php echo $product["name"]; ?>
			</div>
			<div class="shirt-picture">
				<span>
				<img src="<?php echo $product["img"]; ?>" alt="<?php echo $product["name"]; ?>">
				</span>
			</div>
			<div class="shirt-details">
				<h1><span class="price">$<?php echo $product["price"]; ?></span> <?php echo $product["name"]; ?></h1>

				<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
					<input type="hidden" name="cmd" value="_s-xclick">
					<table>
					<tr>
						<th>
						<input type="hidden" name="on0" value="Size">
						<label for="os0">Size</label>
						</th>
						</tr>
						<tr>
							<td>
								<select name="os0" id="os0">
									<?php foreach($product["sizes"] as $size) { ?>
									<option value="<?php echo $size; ?>"><?php echo $size; ?> </option>
									<?php } ?>
								</select>
							</td>
						</tr>
					</table>
					<input type="hidden" name="encrypted" value="<?php echo $product["paypal"]; ?>">
					<input type="submit" value="Add to cart" name="submit">
				</form>

				<p class="note-designer">* All shirts designed by Syd the Cat.</p>
			</div>
		</div>
	</div>

<?php include("includes/footer.php"); ?>


<!--Testing Code-->
<!-- <pre><?php //-->
// echo $product_id . "\n";
// var_dump($product);
?></pre>
