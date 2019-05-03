<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ajouter Produit</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width= device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../CSS/style.css">
        <link href="../Bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <script src="../JQuery/jquery-3.2.1.min.js"></script>
        <script src="../Bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <div class="container text-center" >
                    <img src="" width="25%">
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
                        <a class="navbar-brand" href="#">MiniProjet</a>
                    </div>  
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li class="#"><a href="accueil.php">Liste </a></li>
                            <li class="active"><a href="#">Ajouter </a></li>
                            <li class="#"><a href="#">Update </a></li>
                            <li class="#"><a href="#">Supprimer </a></li>
                            <li class="#"><a href="#">Recherche </a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="deconnexion.php"><span class="glyphicon glyphicon-log-out"></span> Deconnexion</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="ajout" style="height: 450px;">
                <h2 style="text-align: center; margin-bottom: 50px;">Nouvel Produit</h2>
                <form class="form-horizontal" action="action1.php">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nom">Nom du Produit</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nom" placeholder="Enter Nom du Produit" name="nom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Prix du Produit</label>
                        <div class="col-sm-10">          
                            <input type="number" class="form-control" id="prix" placeholder="Enter Prix du Produit" name="prix">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Quantité du Produit</label>
                        <div class="col-sm-10">          
                            <input type="number" class="form-control" id="quantité" placeholder="Enter Prix du Produit" name="quantité">
                        </div>
                    </div>
                    <div class="form-group" >
                        <label class="control-label col-sm-2" for="pwd"></label>
                        <div class="col-sm-10" style="width:20%;">          
                            <button type="submit" class="btn btn-succes" name="submit" style="height:60px; background:#2E2E2E; color:white; font-size: 25px; margin-top: 15px;">Authentifier</button> 
                        </div>
                    </div>
                    
                </form>
            </div>
            <footer class="container-fluid text-center" style="background:#2E2E2E; height:80px;">
                <p style="color: #FFF">Cifres Copyright</p>  
                <form class="form-inline" style="color:#FFF;" >Get deals:
                    <input type="nom" class="form-control" size="50" placeholder="nom Address">
                    <button type="button" class="btn btn-danger" style="width:10%;" style="color:#FFF;" >Sign Up</button>
                </form>
            </footer>
        </div>
    </body>
</html>
