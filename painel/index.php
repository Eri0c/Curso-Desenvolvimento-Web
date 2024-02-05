<?php 

    include('../config.php');
    if(Painel::logado() == false){//:: metodo statico, associado a clase, não uma instância
        include('login.php');
    }else{
        include('main.php');
    }
?>