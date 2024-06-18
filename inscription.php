<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once("connect.php");
require("header.php");
?>
<?php
if (isset($_POST["bouton"])) {
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];
    $pren = $_POST['prenom'];
    $nom = $_POST['nom'];

    $req = "select * from user where login='$login'";
    $res = mysqli_query($id, $req);
    $ligne2 = mysqli_fetch_array($res);
    $idu = $ligne2["idu"];
    if (mysqli_num_rows($res) > 0){
?>
        <script>
            alert('ce login est déjà pris');
        </script>
<?php
 header("location:inscription.php");    
}else{
    $ide = true;
}
    $mdp=$_POST['mdp'];

    $mdpOK = false;

    if (preg_match('/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%£^&*-]).{10,}$/',
                    $mdp)){
                        $mdpOK = true;
                    }
                    if($mdpOK && $ide){
                        $requete = "insert into user (idu,nom,prenom,login,mdp)
                        values (null,'$nom','$pren','$login','$mdp')";

                        mysqli_query($id, $requete);
                        
                        $_SESSION["idu"] = $idu;

                        header("location:index.php");

                        }else{
                            ?>
                            <script> alert ("votre nom d'utilisateur est déjà utilisé ou votre mot de passe n'est pas assez fort");</script>
                            <?php
                            header("location:inscription.php");
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
    <link rel="stylesheet" href="css/insc.css">
    <link rel="stylesheet" href="css/header.css">
    <script src="https://kit.fontawesome.com/1a76fbbd1a.js" crossorigin="anonymous"></script>
</head>
<body>







    <div class="container3">
        <div class="connexion">
            <h1>inscription</h1>
        </div>
        <br>
        <div class="phrase">
            <h2>Remplissez le formulaire d'inscription</h2>
        </div>
        <div class="form">
            <form action="" method="POST">
            <label for="nom">
                    <input type="text" name="nom" placeholder="nom" id="nom" required><br>
                </label>
                <label for="pren">
                    <input type="text" name="prenom" placeholder="prenom" id="pren" required><br>
                </label>
                <label for="login">
                    <input type="text" name="login" placeholder="login" id="login" required><br>
                </label>
                <label for="mdp">
                    <input type="password" name="mdp" id="mdp" placeholder="mot de passe" required><br>
                </label>
                <input type="submit" value="inscription" name="bouton">
            </form>
        </div>
    </div>
</body>
</html>