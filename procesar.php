<?php

$error;
if(!empty($_POST['nickname'] && !empty($_POST['password']))){
    $nickname = $_POST['nickname'];
    $password = $_POST['password'];
    if($nickname == "administrador" && $password == "nimda"){
        header("Location: dashboard.php");
        //echo "Accedio"; 
    }elseif($nickname == "cliente" && $password == "tneilo"){
        header("Location: menu.php");
        //echo "Accedio"; 
    }else{
        //echo "Usuario o contraseña no valida";
        $error = "Incorrecto";
        header("Location: index.php?error=$error");
    }
}else{
    //echo "Los datos estan vacios";
    $error = "Vacio";
    header("Location: index.php?error=$error");
}