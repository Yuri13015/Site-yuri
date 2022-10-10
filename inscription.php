<?php
session_start();

if (isset($_SESSION['session_time'])) {
    header('location: ./ho.php');
    exit();
}
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
            <li><a class="red" href="inscription.php">inscription</a></li>
            <li><a class="red" href="connexion.php">Connexion</a></li>
        </ul>
        <!--ici j'ai mis le liens vers mes autres fichier-->
    </nav>
    <p></p>
</header>

<body class="contact">
    <form method="post" action="php/register.php">
        <div class="input-group mb-3">
            <input name="pseudo" type="text" class="form-control" placeholder="Pseudo" required />
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user"></span>
                </div>
            </div>
        </div>

        <div class="input-group mb-3">
            <label for="civiliter">civilité</label>
            <select name="civilite" id="civiliter">
                <option value="">H/F</option>
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
            </select>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>

        <div class="input-group mb-3">
            <input name="nom" type="text" class="form-control" placeholder="Nom" required />
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>

        <div class="input-group mb-3">
            <input name="prenom" type="text" class="form-control" placeholder="Prénom" required />
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>


        <div class="input-group mb-3">
            <input type="number" name="code" class="form-control" placeholder="Code secret" required />
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>

        <div class="input-group mb-3">
            <input name="password" type="password" class="form-control" placeholder="Mot de passe" required />
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>

        <div class="input-group mb-3">
            <input name="password_repeat" type="password" class="form-control" placeholder="Retaper votre mot de passe" required />
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>

        <div class="input-group mb-3">
            <label for="start">Start date:</label>
            <input type="date" id="start" name="date" value="2000-07-22" min="1900-01-01" max="2022-12-31">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>

        <div class="input-group mb-3">
            <input name="adresse" type="text" class="form-control" placeholder="Adresse" required />
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>

        <div class="input-group mb-3">
            <input name="telephone" type="number" class="form-control" placeholder="Numero" required />
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>

        <div class="input-group mb-3">
            <input name="postal" type="number" class="form-control" placeholder="Code postal" required />
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>

        <div class="input-group mb-3">
            <input name="email" type="text" class="form-control" placeholder="Email" required />
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="icheck-primary">
                    <input type="checkbox" id="agreeTerms" name="terms" value="agree" required />
                    <label for="agreeTerms" class="w-100">
                        Je certifie avoir lu les conditions d'inscription
                    </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-12 mb-2 mt-2">
                <button type="submit" class="btn btn-primary btn-block">
                    Finaliser
                </button>
            </div>
            <!-- /.col -->
        </div>

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