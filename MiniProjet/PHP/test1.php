<?php
ini_set("display_errors","on");
    $age = 22;
    $prenom = "Ababacar Sadikh GUEYE";
    echo "$prenom tu as $age ans <br>";
    echo $prenom.' tu as '.$age.' ans';
    $tabfonc= array("phpinfo","date");
    $tabfonc[0]();
    echo $tabfonc[1]("D d m Y H:i:s");
?>  