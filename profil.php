<?php
session_start();
require("connect.php");
error_reporting(E_ALL);
ini_set("display_errors", 1);
if (!isset($_SESSION["idu"])) {
    header("location:connexion.php?erreur=1");
}

$idu = $_SESSION["idu"];
$resu = "select * from resultat where idu = $idu order by idre desc LIMIT 5";
$res = mysqli_query($id, $resu);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/profil.css">
    <title>profil</title>
</head>
<header>
    <?php
require_once("header.php");
?>
</header>

<body>
    <div class="container1">

    <?php
                $div1 = "SELECT * FROM resultat WHERE idu = $idu AND niveau = 0";
                $cal1 = mysqli_query($id,$div1);
                $tot1 = mysqli_num_rows($cal1);

                $div = "SELECT * FROM resultat WHERE idu = $idu AND niveau = 1";
                $cal = mysqli_query($id,$div);
                $tot = mysqli_num_rows($cal);
                
                $tot2 = $tot + $tot1;
                if($tot2 = 0){
                    echo "Vous n'avez pas encore enregistré de score !!!";

                ?><div class="bout">
                    <a href="index.php"><input type="button" value="acceuil" name="Accueil"></a>
                    </div><?php
                }else{
    ?>




        <div class="tableau">
            <table>
                <tr>
                    <th>date</th>
                    <th>score</th>
                    <th>difficulté</th>
                </tr>
                <?php
                while ($ligne = mysqli_fetch_array($res)){
                    $date = $ligne["date"];
                    $note = $ligne["note"];
                    $niveau = $ligne["niveau"];
            ?>
                <tr>
                    <td><?=$date?></td>
                    <td><?=$note?></td>
                    <td>
                        <?php 
                    if($niveau == 1){
                        echo "expert";
                    }else{
                        echo "débutant";
                    }
                    ?>
                    </td>
                </tr>
                <?php
                }}
            ?>
            </table>
        </div>

        <?php if ($niveau == 0){
        ?>
        <div class="moyenne">
            <?php
                $sql = "SELECT SUM(note) As 'note' FROM resultat where idu = $idu and niveau = 0";
                $query = mysqli_query($id, $sql);
                $som = mysqli_fetch_array($query);

                $div = "SELECT * FROM resultat WHERE idu = $idu AND niveau = 0";
                $cal = mysqli_query($id,$div);
                $tot = mysqli_num_rows($cal);

                if($tot = 0){
                    echo "vous n'avez pas encore de score enregistré";
                }else{

                $moyenne1 = $som["note"]/2;
                $moyenne1 = number_format($moyenne1, 2);

                $upd = "UPDATE user SET moy1 = $moyenne1 WHERE idu = $idu";
                $query2 = mysqli_query($id, $upd);
            ?>
            Votre score moyen dans la difficultée
            <?php echo "<b>débutante</b> est de <br> <b>"."$moyenne1"."/20</b><br>"; ?>
            <?php
            if($moyenne1 < 10){
                echo "reprenez-vous !!!";
            }elseif($moyenne1 >= 10 && $moyenne1 < 15){
                echo"vous y êtes presque, continuez comme ça !!!";
            }elseif($moyenne1 == 15 || $moyenne1 >15){
            echo "felicitation vous êtes un champion!!!";
            }}
        }
            ?>
        </div>

        <?php if($niveau == 1){
                   ?> <div class="moyenne"> <?php
                $sql = "SELECT SUM(note) As 'note' FROM resultat where idu = $idu and niveau = 1";
                $query = mysqli_query($id, $sql);
                $som = mysqli_fetch_array($query);

                $div = "SELECT * FROM resultat WHERE idu = $idu AND niveau = 1";
                $result = mysqli_query($id,$div);
                $tot = mysqli_num_rows($result);

                if($tot = 0){
                    echo "Vous n'avez pas encore de score enregistré";
                }else{

                $moyenne2 = $som["note"] / 2;
                $moyenne2 = number_format($moyenne2, 2);

                $upd = "UPDATE user SET moy2 = $moyenne2 WHERE idu = $idu";
                $query2 = mysqli_query($id, $upd);
            ?>
            Votre score moyen dans la difficultée <?=$tot//faut enlever ça !!!?> 
            <?php echo "<b>experte</b> est de <br> <b>"."$moyenne2"."/20</b><br>"; ?>
            <?php
            if($moyenne2 < 10){
                echo "reprenez-vous !!!";
            }elseif($moyenne2 >= 10 && $moyenne2 < 15){
                echo"vous y êtes presque, continuez comme ça !!!";
            }elseif($moyenne2 == 15 || $moyenne2 >15){
            echo "felicitation vous êtes un champion!!!";
            }
            }}
            ?>
        </div>
    </div>
    <div class="bout">
        <a href="index.php"><input type="button" value="acceuil" name="Accueil"></a>
    </div>
</body>

</html>