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
   
</div>


<header>
    <div class="center">
        <div class="loggout">
            <a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout"><i class="fa-solid fa-right-from-bracket"></i></a>
        </div><!--loggout -->
        <div class="clear"></div><!--clear -->
    </div><!--center -->

</header>
</body>
</html>