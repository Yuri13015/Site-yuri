<?php
session_start();

if (!isset($_SESSION['session_time'])) {
    header('location: ./ho.php');
    exit();
}
require('php/db.php');

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>
<header>
    <img src="img/logo.png" alt="logo de marseille" width="172px" height="219px" class="logoprincipal">
    <div class="titrepage">
        <h1> Nous contacter </h1>
    </div>
    <nav id="mainNav">
        <ul class="centrer">
            <li><a class="red" href="index.php">Accueil</li>
            <li><a class="red" href="histoire.php">Histoire du club</a></li>
            <li><a class="red" href="trophe.php">Trophé remporter</a></li>
            <li><a class="red" href="supporter.php">Les supporters</a></li>
            <li><a class="red" href="ajoutdecommentaire.php">Commentaires</a></li>
            <li><a class="red" href="php/deconnexion.php">deconnexion</a></li>
        </ul>
        <!--ici j'ai mis le liens vers mes autres fichier-->
    </nav>
    <p></p>
</header>

<body class="contact">
<form method="post" action="php/commentaire.php">
                    <label for="firstname">Votre pseudo</label> <br>
                    <input class="form-control" type="text" name="firstname" id="firstname"> <br>
                    <label for="commentary">Votre commentaire</label> <br>
                    <input class="form-control" type="text" name="commentary" id="commentary"> <br>
                    <input class="btn btn-primary w-100" type="submit" value="Envoyer">
                </form>
            <!-- /.col -->
        <?php
                $req = $bdd->prepare('SELECT * FROM commentary');
                $req->execute();
                while ($data = $req->fetch()) {
                ?>
                    <div class="card mb-2 p-2">
                        <h6>de <?= $data['firstname'] ?></h6>
                        <div class="card-body">
                            <?= $data['commentary'] ?>
                        </div>
                    </div>
                <?php
                }
                ?>
        <div class="mapouter">
            <div class="gmap_canvas"><iframe width="400" height="350" id="gmap_canvas" src="https://maps.google.com/maps?q=robert%20louis%20dre&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        height: 350px;
                        width: 400px;
                    }
                </style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
                <style>
                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 350px;
                        width: 400px;
                    }
                </style>
            </div>
        </div>
</body>
<ARticle class="siteom">
    <a href="https://www.om.fr/fr"> Site om </a>
</ARticle>
<footer>
    <div class=" fin">
        <a target="blank" href="https://www.facebook.com/OM/?brand_redir=1894151597502757"><img src="img/facebook.gif" alt="facebook" width="30px" height="30px"></a>
        <a target="blank" href="https://www.instagram.com/olympiquedemarseille/"><img src="img/instagram.gif" alt="instagram" width="30px" height="30px"></a>
        <a target="blank" href="https://twitter.com/OM_Officiel"><img src="img/twitter.gif" alt="twitter" width="30px" height="30px"></a>
        <p> mentions l'égales | paramètres des données | protections des données</p>
    </div>
</footer>

</html>

</html>