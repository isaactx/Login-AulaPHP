<?php

include_once(__DIR__."/../vendor/autoload.php");

use App\model\Usuario; 


if(!isset($_SESSION['uLogado'])) {
    $_SESSION['uLogado'] = "";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if($_POST['nome'] == 'admin' && $_POST['pass'] == 'admin'){
        $uAdminPadrao = new Usuario();
        $uAdminPadrao -> setName ('admin');
        $uAdminPadrao -> setPass ('admin');
        $_SESSION['uLogado'] = $uAdminPadrao -> getName();
        echo "Login realizado";
    }else{
        echo "Falha no login";
    }
}