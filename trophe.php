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
    <title> De nombreux trophés</title>
    <link rel="stylesheet" href="style.css" />
</head>
<header>
    <img src="img/logo.png" alt="logo de marseille" width="172px" height="219px"class="logoprincipal">
    <div class="titrepage"><h1 >Liste des trophés remportée </h1></div>
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
        <div><h2 class="lestitres"> Champion de France </h2>
        <p> L'om compte actuellement 9 titres de champion de france sont dernier datant de la saison 2010/2011 avec l'entraineur Didier Deschamps</p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/YgnUn-_4xtw" title="YouTube video player" frameborder="0" allow="accelerometer; controls; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div><h3 class="lestitres"> 1 Ligue des champions </h3>
    <p>L'om et le seul club français encore à ce jour à avoir remporter la plus grande compétition européenne, en 1993 sous l'ère Tapie.</p>
<img src="img/ligue des champions.jpg" alt="trophée ligue des champions" width="320px" height="181px">
</div>
<div><h4 class="lestitres"> De nombreux autres trophés </h4>
<img src="img/palmares om.jpg" alt="liste des trpohés" width="300px" height="200px">
</div>
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