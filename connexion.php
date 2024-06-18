<?php
require_once("connect.php");
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once("header.php");
?>
<?php
session_start();
if(isset($_POST["bouton"])){
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];
    $req = "select * from user
            where login='$login'
            and mdp='$mdp'";
    $res = mysqli_query($id,$req);
    $ligne8 = mysqli_fetch_array($res);
    if(mysqli_num_rows($res)>0){
        $_SESSION["idu"] = $ligne8["idu"];
        header("location:index.php");
    }else{
        $erreur = "Erreur de login ou de mot de passe";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/connect.css">
    <link rel="stylesheet" href="css/header.css">
    <script src="https://kit.fontawesome.com/1a76fbbd1a.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container2">
        <div class="connexion">
            <h1>connexion</h1>
        </div>
        <br>
        <div class="phrase">
            <h2>Entrez votre identifiant et votre mot de passe !</h2>
        </div>
        <br>
        <?php
        $mdp = isset($_SESSION["mdp"]) ? $_SESSION["mdp"] : "";
        ?>

        <form action="" method="post">
        <?php if(isset($erreur)) echo "<h2>$erreur</h2>";?>
        <input type="text" name="login" placeholder="login :" required><br><br>
        <input type="password" name="mdp" placeholder="Mot de passe :" required><br><br>
        <input type="submit" value="Connexion" name="bouton">
        </form>
        <p>Je n'ai pas encore de compte :<a href="inscription.php">s'inscrire</a></p>
    </div>
</body>

</html>