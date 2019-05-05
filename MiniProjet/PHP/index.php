<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../CSS/style.css">
        <title>Page d'Authentification</title>
    </head>
    <body style="background: #2E2E2E;">
        <div id="contenu" style="border:3px solid #FFF; z-index:1;">
            <form action="index.php" method="post">
                <div class="imgcontainer">
                    <img src="../Images/avatar.jpeg" alt="Avatar" class="avatar">
                </div>

                <div class="container" style="border:2px solid #FFF;">
                    <label for="uname"><b>Login</b></label>
                    <input type="text" placeholder="Enter Username" name="username" required>

                    <label for="psw"><b>Mot de Passe</b></label>
                    <input type="password" placeholder="Enter Password" name="pwd" required>
                        
                    <button type="submit" name="submit" style="background:#2e2e2e; width:25%;">Authentifier</button><br>
                    <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                </div>

                <div class="container">
                    <button type="button" class="cancelbtn">Annuler</button>
                    <span class="psw">Mot de passe <a href="#">oublié?</a></span>
                </div>
            </form>
        </div>
    </body>
</html>
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
                        echo "<h1 style='text-align: center; background: red; width:45%;'>Identifiant Incorrecte";
                        break;
                    }
                }
            }
            else{
                echo "<h1 style='text-align: center; background: red; width:45%; margin: 0 auto; margin-top: -28.5%;'>Identifiant Incorrecte";
                break;
            }
        }
                
    }
?>