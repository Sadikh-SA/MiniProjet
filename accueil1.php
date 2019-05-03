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
    if(isset($_POST['submit'])) {
        $nom=$_POST['nom'];
        $prix=$_POST['prix'];
        $quantité=$_POST['quantité'];
        if(!empty($nom) && !empty($prix) && !empty($quantité)) {
            if($produit[])
        }
    }

    $images = array('../Images/hpg5.jpg','../Images/mac.jpg','../Images/dell.jpg','../Images/ip6.jpg','../Images/ip8.png','../Images/s8.jpg','../Images/j7.jpg','../Images/tab.jpg','../Images/buro.jpg','../Images/logo.png');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mini Projet PHP</title>
        <meta charset="utf-8"/>
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
                    <img src="<?php echo $images[1]; ?>" width="25%">
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
                            <li class="active"><a href="#">Liste </a></li>
                            <li class="#"><a href="ajouter.php">Ajouter </a></li>
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


            <div class="container"> 
                <?php
                    for($i=0;$i<count($produit);$i++){
                        if($i==0 || $i==3) {
                            echo "<div class='row' style=''>";
                        }
                            echo "  
                                        <div class='col-sm-4'>
                                            <div class='panel panel-primary'>
                                            <div class='panel-heading' style='background:#2E2E2E;' ><h4 align='center' style='text-transform: uppercase;'>".$produit[$i][0]."</h4></div>
                                            <div class='panel-body'><a href='#'><img src='".$images[$i]."'class='img-responsive' style='width:100%; height:200px;' style='height:20%' alt='Image'></a></div>
                                            <div class='panel-heading' style='background:#2E2E2E; height:60px;' id='pied'><h4>
                                                <div id='gauche' style='float:left; width:30%;'>
                                                    <strong>Prix:".$produit[$i][1]."</strong>
                                                </div>
                                                <div id='droite' style='float:right; width:30%;'>
                            ";
                                                    if($produit[$i][2]<10) {
                                                        echo "<strong style='color:red'>quantité: ".$produit[$i][2]."</strong>";
                                                    }
                                                    else {
                                                        echo "<strong>quantité:".$produit[$i][2]."</strong>";
                                                    }
                            echo "              </div>
                                            </h4></div>
                                        </div>   
                                    </div>
                                ";
                    }
                ?>   
            </div>    
            <footer class="container-fluid text-center" style="background:#2E2E2E; height:80px;">
                <p style="color: #FFF">Cifres Copyright</p>  
                <form class="form-inline" style="color:#FFF;" >Get deals:
                    <input type="email" class="form-control" size="50" placeholder="Email Address">
                    <button type="button" class="btn btn-danger" style="width:10%;" style="color:#FFF;" >Sign Up</button>
                </form>
            </footer>
        </div>
    </body>
</html>
    