<?php require_once('../config/config.php'); ?>
<?php require_once('../controller/categoriesController.php') ?>
<?php require_once('../partials/header.php'); ?>

<main>
    <?php foreach($categories as $category) { ?>
    <article>
        <h1> <?php echo $category['id'] . ": " . $category['name']; ?> </h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, provident obcaecati deserunt qui aperiam nobis labore nesciunt, dolor esse mollitia est quos sapiente ullam dolorum ex beatae recusandae rem perferendis.</p>
    </article> 
    <?php } ?>
</main>

<?php require_once('../partials/footer.php'); ?> 