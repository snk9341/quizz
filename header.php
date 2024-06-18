<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/header.css">
    <script src="https://kit.fontawesome.com/1a76fbbd1a.js" crossorigin="anonymous"></script>
    <title>head</title>
</head>
<body>
    <header>
    <div class="container">
        <div class="col-3">

        </div>
        <div class="logo">
            <a href="index.php">🤔bienvenue sur le quizz !🤔</a>
        </div>
        <div class="profil">
        <ul class="nav">
                    <?php
                if(isset($_SESSION["idu"])){
                ?>
                    <li class="block-r">
                        <a href="profil.php" style="color: white; text-decoration: none;"><i
                                class="fa-solid fa-user"></i></a>
                    </li>
                    <?php
                }else{
                    ?>
                    <li class="block-r">
                        <a href="connexion.php" style="color: white; text-decoration: none;">Connexion</a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
    </header>
</body>
</html>