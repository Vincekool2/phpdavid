<?php require_once('../controller/productsController.php'); ?>
<?php require_once('../config/config.php'); ?>
<?php require_once('../partials/header.php'); ?>

<main>

<form>

	
	<select name="category">
    <option value="">choissisez une catégorie</option>
		<?php foreach($productCategories as $category) { ?>
			
			<option value="<?php echo $category; ?>"><?php echo $category; ?></option>
		<?php } ?>

	</select>

	<input type="number" placeholder="prix minimum" name="minPrice" min="<?php echo $productMinPrice; ?>" max="<?php echo $productMaxPrice; ?>"/>

	<input type="number" placeholder="prix maximum" name="maxPrice" min="<?php echo $productMinPrice; ?>" max="<?php echo $productMaxPrice; ?>" />

	<select name="sort"> 

		<option value="">Par défaut</option>
		<option value="price">Prix</option>

	</select>

	<select name="sortDate"> 

		<option value="">Par défaut</option>
		<option value="newest">le plus récent</option>
		<option value="oldest">le plus ancien</option>

	</select>

	<button type="submit">Filtrer</button>
 <button type="submit"><a href="http://localhost:8888/php/views/products.php">reset</a></button>
</form>





<h2>Acheter un produit : </h2>

<section class="products">

	<?php foreach($products as $product) { ?>


		<article class="product">

			<h2><?php echo $product['name']; ?></h2>
			<p>Prix : <?php echo $product['price']; ?>€</p>
			<p><?php echo $product['description']; ?> </p>
			<p>Categorie : <?php echo $product['category']; ?> </p>
			<?php $createdAtDateTime = new DateTime($product['createdAt']); ?>
			<p>Publication : <?php echo $createdAtDateTime->format("d/m/Y"); ?> </p>

		</article>


	<?php } ?>

</section>


</main>


<?php require_once('../partials/footer.php'); ?>