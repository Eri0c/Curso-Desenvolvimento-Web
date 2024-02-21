<?php

    if(isset($_GET['loggout'])){
        Painel::loggout();
    }

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" 
    rel="stylesheet">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/fontawesome.min.css">
    <link href="<?php echo INCLUDE_PATH_PAINEL ?>css/style.css" rel="stylesheet"/>


    <title>Painel de controle</title>
</head>
<body>
<div class="menu">
    <div class="menu-wraper">
   <div class="box-usuario">
    <?php 
        if($_SESSION['img'] == ''){
    ?>
        <div class="avatar-usuario">
            <i class="fa fa-user"></i>
        </div><!--avatar-usuario -->
        <?php }else{ ?>
            <div class="imagem-usuario">
            <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['img'];?>"/>
        </div><!--avatar-usuario -->
        
        <?php }?>
        <div class="nome-usuario">
            <p><?php echo $_SESSION['nome']; ?></p>
            <p><?php echo  pegaCargo($_SESSION['cargo']); ?></p>
        </div><!--nome-usuario -->
   </div><!--box-usuario -->
   </div><!--menu-wraper -->
</div><!--menu -->


<header>
    <div class="center">
        <div class="menu-btn">
            <i class="fa fa-bars"> </i>
        </div><!--menu-btn -->
        <div class="loggout">
            <a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout"><i class="fa-solid fa-right-from-bracket"><span>Sair </span></i></a>
        </div><!--loggout -->
        <div class="clear"></div><!--clear -->
    </div><!--center -->

</header>
<div class="content">
    <div class="box-content left w100">

    </div>
    <!--
    <div class="box-content left w100">
            
    </div>
    <div class="box-content left w50">
            
    </div>
    <div class="box-content right w50">
            
    </div>
    -->

    <div class="clear"></div><!--clear-->
</div><!--content -->
<script src="<?php echo INCLUDE_PATH ?>js/jquery.js"></script>
<script src="<?php echo INCLUDE_PATH_PAINEL ?>js/main.js"></script>
</body>
</html>