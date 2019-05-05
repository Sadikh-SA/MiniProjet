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
                            <li class="#"><a href="supprimer.php">Supprimer </a></li>
                            <li class="active"><a href="Recherche.php">Recherche </a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Deconnexion</a></li>
                        </ul>
                    </div>
                </div>
            </nav>


                <div class="search-sec" style="margin-top: 200px;">
                    <form action="#" method="post" novalidate="novalidate">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-12 p-0" >
                                        <input type="text" class="form-control search-slt" placeholder="Par Nom" name="nom">
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                                        <input type="text" class="form-control search-slt" placeholder="Par Prix Min" name="min" min="50000">
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                                        <input type="text" class="form-control search-slt" placeholder="Par Prix Max " name="max" min="50000">
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                                        <input type="text" class="form-control search-slt" placeholder="Par Quantité " name="quantité" min="0">
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 p-0">
                                        <button type="submit" class="btn btn-danger wrn-btn" name="submit">Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>


                <?php
                    if(isset($_POST['submit'])) {
                        if(empty($_POST['min']) && empty($_POST['max']) && empty($_POST['quantité']) && empty($_POST['nom'])) {
                            echo "<div><h4 style='text-align: center; text-transform: uppercase; background:red;'>Vous n'avez fait aucun test</h4>";
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
                        elseif(empty($_POST['min']) && empty($_POST['max']) && empty($_POST['quantité']) && !empty($_POST['nom'])){
                            for($i=0;$i<count($produit);$i++){
                                if(strtolower($_POST['nom'])==strtolower($produit[$i][0])){
                                    if($i==0 || $i%3==0 ) {
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
                        elseif(empty($_POST['min']) && empty($_POST['max']) && !empty($_POST['quantité']) && empty($_POST['nom'])){
                            for($i=0;$i<count($produit);$i++){
                                if($_POST['quantité']<=$produit[$i][2]){
                                    if($i==0 || $i%3==0 ) {
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
                        elseif(empty($_POST['min']) && !empty($_POST['max']) && empty($_POST['quantité']) && empty($_POST['nom'])){
                            for($i=0;$i<count($produit);$i++){
                                if($_POST['max']<=$produit[$i][1]){
                                    if($i==0 || $i%3==0 ) {
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
                        elseif(!empty($_POST['min']) && empty($_POST['max']) && empty($_POST['quantité']) && empty($_POST['nom'])){
                            for($i=0;$i<count($produit);$i++){
                                if($_POST['min']<=$produit[$i][1]){
                                    if($i==0 || $i%3==0 ) {
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
                        elseif(empty($_POST['min']) && empty($_POST['max']) && !empty($_POST['quantité']) && !empty($_POST['nom'])){
                            for($i=0;$i<count($produit);$i++){
                                if(strtolower($_POST['nom'])==strtolower($produit[$i][0]) && $_POST['quantité']<=$produit[$i][2]){
                                    if($i==0 || $i%3==0 ) {
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
                        elseif(empty($_POST['min']) && !empty($_POST['max']) && empty($_POST['quantité']) && !empty($_POST['nom'])){
                            for($i=0;$i<count($produit);$i++){
                                if(strtolower($_POST['nom'])==strtolower($produit[$i][0]) && $_POST['max']<=$produit[$i][2]){
                                    if($i==0 || $i%3==0 ) {
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
                        elseif(!empty($_POST['min']) && empty($_POST['max']) && empty($_POST['quantité']) && !empty($_POST['nom'])){
                            for($i=0;$i<count($produit);$i++){
                                if(strtolower($_POST['nom'])==strtolower($produit[$i][0]) && $_POST['min']<=$produit[$i][1]){
                                    if($i==0 || $i%3==0 ) {
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
                        elseif(empty($_POST['min']) && !empty($_POST['max']) && !empty($_POST['quantité']) && empty($_POST['nom'])){
                            for($i=0;$i<count($produit);$i++){
                                if($_POST['quantité']<=produit[$i][2] && $_POST['max']<=$produit[$i][1]){
                                    if($i==0 || $i%3==0 ) {
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
                        elseif(!empty($_POST['min']) && empty($_POST['max']) && !empty($_POST['quantité']) && empty($_POST['nom'])){
                            for($i=0;$i<count($produit);$i++){
                                if($_POST['quantité']<=produit[$i][2] && $_POST['min']<=$produit[$i][1]){
                                    if($i==0 || $i%3==0 ) {
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
                        elseif(!empty($_POST['min']) && empty($_POST['max']) && !empty($_POST['quantité']) && !empty($_POST['nom'])){
                            for($i=0;$i<count($produit);$i++){
                                if($_POST['quantité']<=produit[$i][2] && $_POST['min']<=$produit[$i][1] && strtolower($_POST['nom'])==strtolower($produit[$i][0])){
                                    if($i==0 || $i%3==0 ) {
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
                        elseif(empty($_POST['min']) && !empty($_POST['max']) && !empty($_POST['quantité']) && !empty($_POST['nom'])){
                            for($i=0;$i<count($produit);$i++){
                                if($_POST['quantité']<=produit[$i][2] && $_POST['max']<=$produit[$i][1] && strtolower($_POST['nom'])==strtolower($produit[$i][0])){
                                    if($i==0 || $i%3==0 ) {
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
                        elseif(!empty($_POST['min']) && !empty($_POST['max']) && !empty($_POST['quantité']) && empty($_POST['nom'])){
                            for($i=0;$i<count($produit);$i++){
                                if($_POST['quantité']<=produit[$i][2]){
                                    if($_POST['max']>$_POST['min']){
                                        if($i==0 || $i%3==0 ) {
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
                                    else {
                                        echo "<h1 style='text-align: center; background: red; width:80%; margin: 0 auto;>La valeur minimale est supérieure à la maximale.Impossible de Faire la recherche.</h1>";
                                        break;
                                    }
                                }
                            }
                        }
                        elseif(!empty($_POST['min']) && !empty($_POST['max']) && empty($_POST['quantité']) && !empty($_POST['nom'])){
                            for($i=0;$i<count($produit);$i++){
                                if(strtolower($_POST['nom'])==strtolower($produit[$i][0])){
                                    if($_POST['max']>$_POST['min']){
                                        if($i==0 || $i%3==0 ) {
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
                                    else {
                                        echo "<h1 style='text-align: center; background: red; width:80%; margin: 0 auto;>La valeur minimale est supérieure à la maximale.Impossible de Faire la recherche.</h1>";
                                        break;
                                    }
                                }
                            }
                        }
                        elseif(!empty($_POST['min']) && !empty($_POST['max']) && !empty($_POST['quantité']) && !empty($_POST['nom'])){
                            for($i=0;$i<count($produit);$i++){
                                if(strtolower($_POST['nom'])==strtolower($produit[$i][0])&& $_POST['quantité']<=$produit[$i][2]){
                                    if($_POST['max']>$_POST['min']){
                                        if($i==0 || $i%3==0 ) {
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
                                    else {
                                        echo "<h1 style='text-align: center; background: red; width:80%; margin: 0 auto;>La valeur minimale est supérieure à la maximale.Impossible de Faire la recherche.</h1>";
                                        break;
                                    }
                                }
                            }
                        }
                        elseif(!empty($_POST['min']) && !empty($_POST['max']) && empty($_POST['quantité']) && empty($_POST['nom'])){
                            for($i=0;$i<count($produit);$i++){
                                    if($_POST['max']>$_POST['min']){
                                        if($i==0 || $i%3==0 ) {
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
                                    else {
                                        echo "<h1 style='text-align: center; background: red; width:80%; margin: 0 auto;>La valeur minimale est supérieure à la maximale.Impossible de Faire la recherche.</h1>";
                                        break;
                                    }
                            }
                        }
                        
                    }
                    else{

                        for($i=0;$i<count($produit);$i++){
                            if($i==0 || $i%3==0) {
                                echo "
                                        <div class='row' style=''>";
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
                ?>      
                </div> 
            <footer class="container-fluid text-center" style="background:#2E2E2E; height:100px;">
                <p style="color: #FFF">Ababacar Sadikh GUEYE & Aboubacar Camara Copyright</p>  
                <form class="form-inline" style="color:#FFF;" >Get deals:
                    <input type="email" class="form-control" size="50" placeholder="Email Address">
                    <button type="button" class="btn btn-danger" style="width:10%;" style="color:#FFF;" >Sign Up</button>
                </form>
            </footer>
        </div>
    </body>
</html>
