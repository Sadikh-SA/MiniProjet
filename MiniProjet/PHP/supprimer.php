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
            $images = array('../Images/hpg5.jpg','../Images/mac.jpg','../Images/dell.jpg','../Images/ip6.jpg','../Images/ip8.png','../Images/s8.jpg','../Images/j7.jpg','../Images/tab.jpg','../Images/buro.jpg','../Images/logo.png');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Supprimer Produit</title>
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
                <div class="container text-center" id="diapo" >
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
                            <li class="active"><a href="#">Supprimer </a></li>
                            <li class="#"><a href="Rechercher.php">Recherche </a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Deconnexion</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="supp" style="height: 450px;">
                <h2 style="text-align: center; margin-bottom: 50px;">Supprimer un Produit</h2>
                <form class="form-horizontal" action="supprimer.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nom" style="font-size:25px; width:40%;">Nom du Produit</label>
                        <div class="col-sm-10" style="height:50px; width:55%;">
                            <select name="nom" id="nom" style="height:50px; width:40%;">
                                <?php
                                    for($i=0;$i<count($produit);$i++){
                                        echo "<option value='".$produit[$i][0]."'>".$produit[$i][0]."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" style="width:100%;">
                        <label class="control-label col-sm-2" for="pwd"></label>
                        <div class="col-sm-10" style="width:20%; margin: 0 auto; padding:10px;">          
                            <button type="submit" class="btn btn-succes" name="submit" style="height:60px; background:#2E2E2E; color:white; font-size: 25px; margin-top: 15px;">Supprimer</button> 
                        </div>
                    </div>
                    
                </form>
            </div>
                    <?php 
                        if(isset($_POST['submit'])){
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
                            $images = array('../Images/hpg5.jpg','../Images/mac.jpg','../Images/dell.jpg','../Images/ip6.jpg','../Images/ip8.png','../Images/s8.jpg','../Images/j7.jpg','../Images/tab.jpg','../Images/buro.jpg','../Images/logo.png');
                            for($i=0;$i<count($produit);$i++) {
                                if($_POST['nom']==$produit[$i][0]){
                                    $val=$i;
                                    $val1++;
                                }
                            }
                            if($val1!=0){
                                unset($produit[$val]);
                                $produit = array_values($produit);
                                for($i=0;$i<count($produit);$i++) {
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
                            
                                echo " <div class='panel-heading' style='background:red; height:60px;' id='pied'><h4>
                                <div id='gauche' style='float:left; width:30%;'>
                                    <strong>Prix:".$produit[$i][1]."</strong>
                                </div>
                                <div id='droite' style='float:right; width:30%;'>
        
                                        <strong >quantité: ".$produit[$i][2]."</strong>
                                </div>
                                <div id='droite' style='float:right; width:80%;'>
                    
                                                    <strong >montant: ".$produit[$i][2]*$produit[$i][1]."</strong>
                                                </div>
                                ";
                           }
                            else {
                                echo " <div class='panel-heading' style='background:#2E2E2E; height:60px;' id='pied'><h4>
                                        <div id='gauche' style='float:left; width:30%;'>
                                            <strong>Prix:".$produit[$i][1]."</strong>
                                        </div>
                                        <div id='droite' style='float:right; width:31%;'>
                
                                                <strong >quantité: ".$produit[$i][2]."</strong>
                                        </div>
                                        <div id='droite' style='float:right; width:80%;'>
                    
                                                    <strong >montant: ".$produit[$i][2]*$produit[$i][1]."</strong>
                                                </div>
                                        ";
                                    }
            echo "              
                            </h4></div>
                        </div>
                                    </div>
                                ";
                                }
                            }
                        }    
                    ?>
        </div>
        <footer class="container-fluid text-center" style="background:#2E2E2E; height:100px;">
                <p style="color: #FFF">Ababacar Sadikh GUEYE & Aboubacar CAMARA Copyright</p>  
                <form class="form-inline" style="color:#FFF;" >Get deals:
                    <input type="nom" class="form-control" size="50" placeholder="nom Address">
                    <button type="button" class="btn btn-danger" style="width:10%;" style="color:#FFF;" >Sign Up</button>
                </form>
        </footer>
        </div>
    </body>
</html>
