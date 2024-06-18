<?php

session_start();
include('connect.php');
error_reporting(E_ALL);
ini_set("display_errors", 1);
if (!isset($_SESSION["idu"])) {
    header("location:connexion.php?erreur=1");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/resultat.css">
    <title>resultat</title>
</head>
<header>
    <?php
require_once("header.php");
?>
</header>
<body>
    
<div class="flex">
<?php
$note = 0;
$i = 1;
foreach($_POST as $key => $value) {
    if($value == 1){
    $note += 2; //$note = $note + 2
    $i++;
}else {
?>
        <div class="bloc">
<?php
    $req1 = "select * from questions where idq=$key";
    $req2 = "select * from reponses where idq=$key and verite=1";
    $res1 = mysqli_query($id,$req1);
    $ligne1 = mysqli_fetch_assoc($res1);
    $res2 = mysqli_query($id, $req2);
    $ligne2 = mysqli_fetch_assoc($res2);
    $niveau = $ligne1["niveau"];
    echo "Tu t'es trompé à la <b>question $i :</b> <U>".$ligne1["libelleQ"].
                "</U><br>La réponse était <b>".$ligne2["libeller"]."</b>";
    $i++;
?>
        </div>

<?php
    }
}?>
    </div>
<?php
$dt = date("Y-m-d H:i:s");
$idu = $_SESSION["idu"];
$ins1 = "INSERT INTO resultat (idre, note, date, idu, niveau) 
VALUES (null,'$note','$dt','$idu', $niveau)";
mysqli_query($id, $ins1);
?>
<div class="note">
<p>Tu as eu <?=$note?> / 20</p>
</div>
<div class="but">
<form action="profil.php" method="post">
    <input type="submit" value="continuer">
</form>
</div>

</body>
</html>