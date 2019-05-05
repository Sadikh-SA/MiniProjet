<?php
            $produit = array(   
                array('Hp Probook G5',450000,9),
                array('Macbook',1600000,5),
                array('Dell',300000, 15),
                array('iphone6',160000,65),
                array('iphone8',280000,70),
                array('GalaxieS8',380000,25),
                array('J7pro',180000,68),
                array('Tablette',130000,80),
                array('Ordinateur Bureau',200000,8)
            );
            $images = array('../Images/hpg5.jpg','../Images/mac.jpg','../Images/dell.jpg','../Images/ip6.jpg','../Images/ip8.png','../Images/s8.jpg','../Images/j7.jpg','../Images/tab.jpg','../Images/buro.jpg');            
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Description du Projet</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width= device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../CSS/style.css">
        <link href="../Bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <script src="../JQuery/jquery-3.2.1.min.js"></script>
        <script src="../Bootstrap/js/bootstrap.min.js"></script>
        <style>
            p {
                font-size: 20px;
            }
            strong {
                font-size: 25px;
            }
            h2 {
                text-align: center;
            }
            ol {
                font-size: 20px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <div class="container text-center" id="diapo">
                    <img src="<?php echo $images[1]; ?>">
                    <img src="<?php echo $images[4]; ?>">
                    <img src="<?php echo $images[8]; ?>">
                </div>
            </div>
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="Connexion.phpmyNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button>
                        <a class="navbar-brand" href="miniprojet.php">MiniProjet</a>
                    </div>  
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li class="#"><a href="accueil.php">Liste </a></li>
                            <li class="#"><a href="ajouter.php">Ajouter </a></li>
                            <li class="#"><a href="modifier.php">Update </a></li>
                            <li class="#"><a href="supprimer.php">Supprimer </a></li>
                            <li class="#"><a href="Rechercher.php">Recherche </a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Deconnexion</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div>
                <h2><strong>Enoncé du Projet</strong></h2>
                <p>Ce Mini Projet permet de pratiquer les théories faites en classes sur pratiquement les tableaux à une dimensions et aussi les transmissions de données de page en page.Ce projet est composé comme suit:</p>
                <div>
                    <p>
                        Une Page d'<strong>Authentification</strong> contenant un champ <strong>Login</strong> et un champ <strong>Mot de Passe</strong>. Les utilisateurs sont stockés dans un <strong>Tableau</strong>. Chaque Utilisateur est caractérisé par <strong>un nom, un login et un mot de passe</strong>.
                    </p>
                </div>
                <div>
                    <p>
                        Une fois que l'utilisateur s'est authentifié, il est tout de suite redirigé vers la page d'<strong>Accueil</strong> qui contient les liens vers les pages suivantes: 
                    </p>
                </div>
                <div>
                    <ol>
                        <li>Une Page listerproduits.php: qui liste les produits</li>
                        <li>Une Page rechercherProduits.php : qui affiche une liste de produits à partir d’un seuil de quantité saisi par l’utilisateur ou prix ou nom. </li>
                        <li>Une Page ajouterProduit.php : qui ajoute à la volé un produit au tableau de produits et affiche les produits en bas du formulaire d’ajout.</li>
                        <li>Une Page updateProduit.php : qui modifie à la volé un produit au tableau de produits et affiche les produits en bas du formulaire de modification.</li>
                        <li>Une Page supprimerProduit : qui supprimer à la volé un produit du tableau de produits et affiche les produits en bas du formulaire de suppression.</li>
                    </ol>
                    <p><strong>NB:</strong> Les produits sont stockés dans un tableau. Chaque produit est caractérisé par un nom, un prix unitaire et une quantité en stock. (Infos à afficher : nom, prix quantité et montant).</p><br>
                    <p>Deux produits ne peuvent pas avoir le même nom, les prix sont >= 50, la quantité est strictement positif. Les produits dont la quantité est inférieure à 10 sont <strong>afficher en rouge.</strong></p>
                </div>
            </div>
            <footer class="container-fluid text-center" style="background:#2E2E2E; height:100px;">
            <p style="color: #FFF">Ababacar Sadikh GUEYE & Aboubacar Camara Copyright</p>  
            <form class="form-inline" style="color:#FFF;" >Get deals:
                <input type="nom" class="form-control" size="50" placeholder="nom Address">
                <button type="button" class="btn btn-danger" style="width:10%;" style="color:#FFF;" >Sign Up</button>
            </form>
        </footer>
        </div>
</body>
</html>