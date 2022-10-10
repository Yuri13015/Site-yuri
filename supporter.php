<?php
session_start();

if (!isset($_SESSION['session_time'])) {
    header('location: ./connexion.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Les plus beaux buts </title>
    <link rel="stylesheet" href="style.css" />
</head>
<header>
    <img src="img/logo.png" alt="logo de marseille" width="172px" height="219px"class="logoprincipal">
    <div class="titrepage"><h1> Les meilleurs supporters de france </h1> </div>
   <nav id="mainNav">
       <ul class="centrer">
           <li><a class="red" href="index.php">Accueil</li>
           <li><a class="red" href="histoire.php">Histoire du club</a></li>
           <li><a class="red" href="trophe.php">Trophé remporter</a></li>
           <li><a class="red" href="supporter.php">Les supporters</a></li>
           <li><a class="red" href="ajoutdecommentaire.php">Commentaires</a></li>
           <li><a class="red" href="php/logout.php">Deconnexion</a></li>
       </ul> 
       <!--ici j'ai mis le liens vers mes autres fichier-->
   </nav>
   <p></p>
</header>
<body>
    <section>
        <div><h2 class="lestitres"> Des tifos a coupés le souffle</h2>
            
        <img src="img/tifo OM.jpg" alt="tifo l'om" width="400px" height="200px">
        <img src="img/tifo om paris.jpg" alt="tifo om paris" width="400" height="200">
    </div>
    <div><h3 class="lestitres"> Une ambiance inégalé </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/ahx_Fk-okqE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div>
        <h4 class="lestitres"> De nombreux groupes de supporters </h4>
    <img src="img/groupe de supporter.jpg" alt=" groupe de supporter" width="300px" height="200px"></div>

    </section>
    <ARticle  class="siteom">
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
</body>
</html>