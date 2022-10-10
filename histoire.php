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
    <title> Un club avec une grande histoire </title>
    <link rel="stylesheet" href="style.css" />
</head>
<header>
    <img src="img/logo.png" alt="logo de marseille" width="172px" height="219px"class="logoprincipal">
    <div class="titrepage"><h1> L'histoire du club </h1></div>
   <nav id="mainNav">
       <ul class="centrer">
           <li><a class="red" href="index.php">Accueil</li>
           <li><a class="red" href="histoire.php">Histoire du club</a></li>
           <li><a class="red" href="trophe.php">Trophé remporter</a></li>
           <li><a class="red" href="supporter.php">Les supporters</a></li>
           <li><a class="red" href="ajoutdecommentaire.php">Commentaires</a></li>
           <li><a class="red" href="php/logout.php">Deconnexion</a></li>
       </ul> 
       <!---- ici j'ai mis le liens vers mes autres fichier-->
   </nav>
</header>
<body>

    <section> 
        <div>
            <h2 class="lestitres"> Les débuts </h2>
            <p>L'Olympique de Marseille (OM) est un club de football français fondé en août 1899 à Marseille par René Dufaure de Montmirail.
                Le club joue au stade de l'Huveaune de 1904 à 1937, date à laquelle est inauguré le stade Vélodrome.
                L'OM est l'un des clubs qui a joué durant la saison inaugurale 1932-1933 et qui évolue encore en Ligue 1 aujourd'hui. 
                Après un premier titre de champion de France en 1929, dans une compétition aujourd'hui disparue.</p>
                <img src="img/Reglement_Olympique_de_Marseille_1900.jpg" alt="certificat l'om" width="200px" height="250px">
                </div>
                <div>
            <h3 class="lestitres"> Une nouvelle ère </h3>        
                <p>Une série de montées et descentes s'effectue dans les années 1960 et la décennie suivante est marquée par le premier doublé Coupe-Championnat de l'histoire du club en 1972.
                Après une période noire au début des années 1980 où l'OM est proche de la faillite, l'arrivée de Bernard Tapie introduit la période la plus grande du club
                L'affaire VA-OM et ses conséquences économiques plongent le club en deuxième division. Après sa remontée en 1996, le club se confronte à nouveau à la justice avec l'affaire des comptes de l'OM et n'arrive plus à gagner de titre majeur, malgré notamment deux finales de Coupe UEFA (1999 et 2004). 
                Cette période blanche prend fin avec le titre de champion de France 2009-2010 et trois victoires consécutives en Coupe de la Ligue en 2010, 2011 et 2012.</p>
                <img src="img/bernard tapie.jpg" alt="bernard tapie OM" width="200px" height="150px">
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