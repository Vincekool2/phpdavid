
<?php require_once('../config/config.php'); ?>
<?php require_once('../controller/reviewsController.php'); ?>
<?php require_once('../partials/header.php'); ?>    



<main>
    <?php foreach($reviews as $review) { ?>
    <article class="align">
        <h1> <?php echo "<img src='" . $review['img'] . "' /> " . $review['id'] . ": " . $review['user']; ?> </h1>
        <p> <?php echo $review['date']; ?> </p>
        <p> <?php echo $review['message']; ?> </p>
        <p><?php echo $review['product']; ?></p>
        <p> <?php echo $review['price'] . "€"; ?> </p>
        <img src="<?php echo $review['imgProduct']; ?>" alt="">
        <?php $stars = ""; for ($i = 1; $i <= $review['rating']; $i++) { $stars .= "⭐"; } echo "<p>note: $stars </p>";?>
    </article> 
    <?php } ?>
</main>


<?php require_once('../partials/footer.php'); ?>