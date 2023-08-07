<?php 

    $email = "g211210082@ogr.sakarya.edu.tr";
    $pass = "g211210082";

    $_email = $_POST["mail"];
    $_pass = $_POST["password"];

    if(($_email == $email) && ($_pass == $pass))
    {
        echo "HOŞGELDİNİZ g211210082";
    }
    else
    {
        header("Location:login.html");        
        exit();
    }


?> 