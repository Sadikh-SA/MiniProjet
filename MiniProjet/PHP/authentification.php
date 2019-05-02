<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../CSS/style1.css">
        <title>Page d'Authentification</title>
    </head>
    <body>
        <div id="contenu">
            <form action="traitement.php" method="post">
                <div class="imgcontainer">
                    <img src="../Images/avatar.jpeg" alt="Avatar" class="avatar">
                </div>

                <div class="container">
                    <label for="uname"><b>Login</b></label>
                    <input type="text" placeholder="Enter Username" name="username" required>

                    <label for="psw"><b>Mot de Passe</b></label>
                    <input type="password" placeholder="Enter Password" name="pwd" required>
                        
                    <button type="submit" name="submit">Authentifier</button>
                    <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" class="cancelbtn">Annuler</button>
                    <span class="psw">Mot de passe <a href="#">oublié?</a></span>
                </div>
            </form>
        </div>
    </body>
</html>
