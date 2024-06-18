<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
include('connect.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Acceuil</title>
</head>
<header>
    <?php
require_once("header.php");
?>
</header>

<body class="color">
    <div class="container5">
        <div class="form">
            <form action="quizz.php" method="post">
                <div class="champs">
                    <div class="qes">
                        choisis ton niveau 🫵
                    </div>
                    <div class="deb">
                        <br>
                        <label for="debutant">débutant</label>
                        <input type="radio" name="niveau" id="debutant" value="0">
                    </div>
                    <div class="exp">
                        <label for="expert">expert</label>
                        <input type="radio" name="niveau" id="expert" value="1">
                    </div>
                    <br><input type="submit" value="c'est parti">
                </div>
            </form>
        </div>

        <div class="tableau">
            <p class="para"><b>Nos Meilleurs joueurs !!!</b></p>
            <form method="post">
                <input type="submit" name="débutant" value="débutant" />

                <input type="submit" name="expert" value="expert" />
            </form>


            <table>
                <tr>
                    <th>joueur</th>
                    <th>note moyenne</th>
                </tr>
                <?php
                    if(isset($_POST['débutant'])){

                $sel = "select * from user order by moy1 DESC limit 5";
                $req5 = mysqli_query($id, $sel);

                while ($ligne = mysqli_fetch_array($req5))
                {
                    $moyenne1 = $ligne["moy1"];
                    $user = $ligne["prenom"];
            ?>
                <tr>
                    <td><?php echo $user; ?></td>
                    <td><?php echo $moyenne1;?> </td>
                </tr>
                <?php
                }
            ?>
            </table>
            <?php } ?>



            <?php
                    if(isset($_POST['expert'])){

                $sel2 = "select * from user order by moy2 DESC limit 5";
                $req2 = mysqli_query($id, $sel2);

                while ($ligne2 = mysqli_fetch_array($req2))
                {
                    $moyenne2 = $ligne2["moy2"];
                    $user1 = $ligne2["prenom"];
            ?>
                <tr>
                    <td><?php echo $user1; ?></td>
                    <td><?php echo $moyenne2;?> </td>
                </tr>
                <?php
                }
            ?>
            </table>
            <?php } ?>

            <?php
                    if(!isset($_POST['débutant']) && !isset ($_POST['expert'])){

                $sel = "select * from user order by moy1 DESC limit 5";
                $req5 = mysqli_query($id, $sel);

                while ($ligne = mysqli_fetch_array($req5))
                {
                    $moyenne1 = $ligne["moy1"];
                    $user = $ligne["prenom"];
            ?>
                <tr>
                    <td><?php echo $user; ?></td>
                    <td><?php echo $moyenne1;?> </td>
                </tr>
                <?php
                }
            ?>
            </table>
            <?php } ?>

        </div>
    </div>
</body>

</html>