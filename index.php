<?php
session_start();

if (!isset($_SESSION['session_time'])) {
    header('location: ./connexion.php');
    exit();
}
?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Site Fan Olympique de marseille </title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <header>
        <img src="img/logo.png" alt="logo de marseille" width="172px" height="219px" class="logoprincipal">
        <div class="titrepage">
            <h1>Bonjour <?php echo htmlspecialchars($_SESSION['pseudo']); ?> Bienvenue sur le site fan de L'OM </h1>
        </div>
        <nav id="mainNav">
            <ul class="centrer">
                <li><a class="red" href="index.php">Accueil</li>
                <li><a class="red" href="histoire.php">Histoire du club</a></li>
                <li><a class="red" href="trophe.php">Trophé remporter</a></li>
                <li><a class="red" href="supporter.php">Les supporters</a></li>
                <li><a class="red" href="ajoutdecommentaire.php">commentaire</a></li>
                <li><a class="red" href="php/deconnexion.php">deconnexion</a></li>
            </ul>
            <!--ici j'ai mis le liens vers mes autres fichier-->
        </nav>
    </header>

    <section class="but">
        <h2> L'olympique de marseille </h2>
        <p class="slogan"> Droit au but est le slogan que marseille s'éfforce à préserver</p>
        <img src="img/logoomancien-removebg-preview.png" alt="logo de l'om" width="225px" height="150px">
    </section>

    <section class="historique">
        <div class="wrap">
            <h3> Club historique </h3>
            <div class="bloc1">
                <p class="exist">Déja plus de 120 ans d'existence</p>
                <img src="img/tifo des 120 ans.jpg" alt="tifo des 120 ans du club" width="400px" height="300px"
                    class="stade">
            </div>

            <h4> Des joueurs mythiques </h4>
            <div class="bloc2">
                <p> De nombreux joueurs on marqué l'histoire de ce club </p>
                <div class="joueur">
                    <div class="animation">
                        <img src="img/papin.jpg" alt="image papin" width="400px" height="300px">
                        <img src="img/mandandajoueur.jpg" alt="image mandanda" width="400px" height="300px">
                        <img src="img/basilebolijoueur.jpg" alt="image basile boli" width="400px" height="300px">
                        <img src="img/payet pour joueur.jpg" alt="image payet" width="400px" height="300px">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--je presente brièvement le club avec des images-->

    <ARticle class="siteom">
        <a href="https://www.om.fr/fr"> Site om </a>
    </ARticle>
    <!--un lien qui redirige vers le site du club-->
    <footer>
        <div class=" fin">
            <a target="blank" href="https://www.facebook.com/OM/?brand_redir=1894151597502757"><img
                    src="img/facebook.gif" alt="facebook" width="30px" height="30px"></a>
            <a target="blank" href="https://www.instagram.com/olympiquedemarseille/"><img src="img/instagram.gif"
                    alt="instagram" width="30px" height="30px"></a>
            <a target="blank" href="https://twitter.com/OM_Officiel"><img src="img/twitter.gif" alt="twitter"
                    width="30px" height="30px"></a>
            <p> mentions l'égales | paramètres des données | protections des données</p>
        </div>
    </footer>
</body>

</html>