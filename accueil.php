<?php
    $produit = array(   
                array('Hp Probook G5',450000,9,''),
                array('Macbook',1600000,5,''),
                array('Dell',500000, 15,''),
                array('iphone6',160000,65,''),
                array('iphone8',280000,70,''),
                array('GalaxieS8',380000,25,''),
                array('J7pro',180000,68,''),
                array('Tablette',150000,80,''),
                array('Ordinateur Bureau',200000,8,'')
    );
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
        <div class="container ">
        
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
                <?php
                    for($i=0;$i<count($produit);$i++){
                        if($i==0 || $i%3==0) {
                            echo "<div class='row' style=''>";
                        }
                            echo "  
                            <div class='col-sm-4'>
                            <div class='panel panel-primary'>
                            <div class='panel-heading' style='background:#2E2E2E;' ><h4 align='center' style='text-transform: uppercase;'>".$produit[$i][0]."</h4></div>
                            <div class='panel-body'><a href='#'><img src='".$images[$i]."'class='img-responsive' style='width:100%; height:200px;' style='height:20%' alt='Image'></a></div>
                    ";        
                           if($produit[$i][2]<10){
                            
                                echo " <div class='panel-heading' style='background:red; height:100px;' id='pied'><h4>
                                <div id='gauche' style=' width:50%;'>
                                    <strong>Prix:".$produit[$i][1]."f</strong>
                                </div>
                                <div id='droite' style=' width:50%;'>
        
                                        <strong >quantité: ".$produit[$i][2]."</strong>
                                </div>
                                <div id='droite' style=' width:50%;'>
        
                                        <strong >mont: ".$produit[$i][1]*$produit[$i][2]."f</strong>
                                </div>";
                           }
                            else {
                                echo " <div class='panel-heading' style='background:#2E2E2E; height:100px;' id='pied'><h4>
                                        <div id='gauche' style=' width:50%;'>
                                            <strong>Prix:".$produit[$i][1]."f</strong>
                                        </div>
                                        <div id='droite' ; width:50%;'>
                
                                                <strong >quantité: ".$produit[$i][2]."</strong>
                                        </div>

                                        <div id='droite' style=' width:50%;'>
        
                                        <strong >mont: ".$produit[$i][1]*$produit[$i][2]."f</strong>
                                </div>";
                                        
                                    }
            echo "              
                            </h4></div>
                        </div>
                                    </div>
                                ";
                    }
                ?>    
            
            
        </div>
        <footer class="container-fluid text-center" style="background:#2E2E2E; height:100px;">
                <p style="color: #FFF">Ababacar Sadikh GUEYE & Aboubacar Camara Copyright</p>  
                <form class="form-inline" style="color:#FFF;" >Get deals:
                    <input type="email" class="form-control" size="50" placeholder="Email Address">
                    <button type="button" class="btn btn-danger" style="width:10%;" style="color:#FFF;" >Sign Up</button>
                </form>
            </footer>
    </body>
</html>
    