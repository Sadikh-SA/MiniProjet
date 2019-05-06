<?php
    $utilisateurs = array(  array('Sadikh','Sadikh','Ababacar Sadikh GUEYE'),
                            array('babacar','babacar','Aboubacar Camara'),
                            array('bniass','baye','Baye Niass'),
                        );
    if( isset($_POST['submit'])) {
        $login = htmlspecialchars($_POST['username']);
        $mdp = htmlspecialchars($_POST['pwd']);
        for($i=0;$i<count($utilisateurs);$i++){
            if($utilisateurs[$i][0]==$login){
                for($j=1;$j<count($utilisateurs[$i]);$j++){
                    if($utilisateurs[$i][$j]==$mdp){
                        header('location:accueil.php');
                    }
                    else{
                       echo "Identifiant Incorrecte";
                        header('location: index.php');
                    }
                }
            }
            else{
                echo "Identifiant Incorrecte";
                header('location: index.php');
            }
        }
                
    }
?>
