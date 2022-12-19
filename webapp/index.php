<?php $page_title = "Home ★ Productive"; ?>
<?php require "view/blocks/page_start.php"; ?>
<h1>Welcome to Productive!</h1>

<div style="margin-bottom: 2em;">
	<a href="product.php" class="button">Create New Product</a>
</div>
<table>
	<thead>
		<tr>
			<th>SKU</th>
			<th>Name</th>
			<th>Active</th>
			<th>Price</th>
			<th>Stock</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody id="products-table"></tbody>
</table>

<script>
window.fizzbuzz = function (number) {

	if (number % 3 === 0){
		return 'fizz'
	}
	if (number % === 0){
	return 'buzz'
	}

	return "Nunber must be dibisible by 3 or 5"
}

window.add = function (numberString) {
	let numberString[2, 3]

	const map1 = numberString.map(numberString[0] + numberString[1]);
}
</script>

<?php require "view/blocks/page_end.php"; ?>
<script src="controller/home-products.js"></script>