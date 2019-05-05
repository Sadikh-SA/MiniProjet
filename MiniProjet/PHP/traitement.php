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
                        ?><script type="text/javascript">alert("Identifiant incorrecte"); window.location = "index.php";</script><?php
                    }
                }
            }
            else{
                ?><script type="text/javascript">alert("Identifiant incorrecte"); window.location = "index.php";</script><?php
            }
        }
                
    }
?>