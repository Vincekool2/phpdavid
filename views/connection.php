<?php require_once('../partials/header.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
    <main>
    <form method="post">
        <div>
            <label for="username">Nom d'utilisateur:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <button type="submit">Connexion</button>
        </div>
    </form>
    
</body>
</html>


<?php 
        
session_start();

$_SESSION['username'] = $_POST['username'];

?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['username'] === 'david' && $_POST['password'] === 'test') {
	session_start();

	$_SESSION['username'] = $_POST['username'];
?>

<p>Vous êtes bien connecté</p>

<?php } else { ?>

<p>Mauvais identifiants</p>
	
<?php } ?>
<?php require_once('../partials/footer.php'); ?>