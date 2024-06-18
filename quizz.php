<?php

session_start();
if (!isset($_SESSION["idu"])) {
    header("location:connexion.php?erreur=1");
}
include('connect.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>quizz</title>

</head>
<header>
    <?php
require_once("header.php");
?>
</header>
<body>

<div class="flex">
    <?php
    $lvl = $_POST["niveau"];
$req = "select * from questions where niveau = $lvl order by rand() limit 10";
$res = mysqli_query($id,$req);
$i = 1;
while($ligne = mysqli_fetch_assoc($res)){

    ?>
    <div class="bloc">
        <div class="quest">
    <?php
    $libelleQ = $ligne["libelleQ"];
    $idq = $ligne["idq"];
    echo "<h3>$i : $libelleQ</h3>";
    ?>
        </div>
    <form action="resultat.php" method="POST">
        <div class="qqq">
    quelle-est ta réponse ?<br/><br/>
    </div>
    <?php
    $req2 = "select * from reponses where idq = $idq";
    $res2 = mysqli_query($id, $req2);
    while($ligne2 = mysqli_fetch_assoc($res2))
    {
        $libeller = $ligne2["libeller"];
        $verite = $ligne2["verite"];
        ?>
        <div class="rep">
        <label for="<?=$ligne2["libeller"]?>">
        <input type="radio" name="<?=$idq?>" value="<?=$verite?>" id="<?=$ligne2["libeller"]?>" checked>
        <?=$ligne2["libeller"]?></label>
        </div>

        <?php
}
$i++;
?>

</div>
<?php
}
?>
</div>
<div class="envoie">
<input type="submit" value="Afficher votre score">
</div>
</form>
</body>
</html>
