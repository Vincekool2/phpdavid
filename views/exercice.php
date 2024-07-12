<!-- 
TP :

Créez une nouvelle page pour afficher une liste de commandes (avec la variable envoyée plus bas).
Pour la date, affichez là dans une format différent de celui qui est envoyé
N'oubliez pas de faire une vue, un controleur etc -->


<?php require_once('../config/config.php'); ?>
<?php require_once('../controller/exerciceController.php') ?>
<?php require_once('../partials/header.php'); ?>


<main>
<?php
foreach($orders as $order) { ?>
    <article class="align">
        <br>
        <h1> <?php echo $order['id']; ?> : <?php echo    $order['customer'];?> </h1>
        <h1>Products: </h1>
        <p><?php foreach($order['products'] as $product) { echo $product . " "; } ?> </p>
        <h1> <?php echo $order['amount'];?>$ </h1>
        <h1> Le <?php echo date('d-m-Y', strtotime($order['date'])); ?> </h1>
    </article> 
    <?php }
?>
  </main>

  <?php require_once('../partials/footer.php'); ?>