<?php require_once('../config/config.php'); ?>
<?php require_once('../controller/pizzaController.php') ?>
<?php require_once('../partials/header.php'); ?>

<main>
<!-- le menu pour chooisir sa pizza -->
<article class="align">
<h2>COMMANDEZ VOTRE PIZZA DES MAINTENANT(DONNEZ-NOUS VOTRE ARGENT)</h2>
<form method="post">
    <label for="size">Taille : </label>
    <select name="size" id="size" required>
        <option value="S">S</option>
        <option value="M">M</option>
        <option value="L">L</option>
        <OPtion value="XXXXXL">XXXXXL LA PLUS GRANDE PIZZA DU MO?NDE</OPtion>
    </select>
    <br>
    <label for="base">Base : </label>
    <input type="text" name="base" id="base" required>
    <br>
    <label for="ingredient1">Ingrédient 1 : </label>
    <input type="text" name="ingredient1" id="ingredient1" required>
    <br>
    <label for="ingredient2">Ingrédient 2 : </label>
    <input type="text" name="ingredient2" id="ingredient2" required>
    <br>
    <label for="ingredient3">Ingrédient 3 : </label>
    <input type="text" name="ingredient3" id="ingredient3" required>
    <br>
    <button type="submit">Valider</button>
</form>
</article>
<?php 

if (isset($_POST['size']) && isset($_POST['base']) && isset($_POST['ingredient1']) && isset($_POST['ingredient2']) && isset($_POST['ingredient3'])) {
    $Commandepizza = new Pizza($_POST['size'], $_POST['base'], $_POST['ingredient1'], $_POST['ingredient2'], $_POST['ingredient3']);
    $Commandepizza->pay();
    $Commandepizza->ship();
    echo $Commandepizza->calculatePrice(). "€";
}
else {
    echo "Veuillez remplir tous les champs";
}
?>
</main>
<?php require_once('../partials/footer.php'); ?>
