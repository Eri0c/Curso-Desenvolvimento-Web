<?php include('config.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Projeto 01</title>
    
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>fonts/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" 
    rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH;?>estilo/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" contents="palavras-chave,do,meu,site">
    <meta name="description" content="Descrição do meu website">
    <meta charset="UTF-8">
</head>
<body>



    <header>
        <div class="center">
        <div class="logo left"><a href="/">Logomarca</a></div><!--logo-->
        <nav class="desktop right">
            <ul>
                <li><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
                <li><a href="<?php echo INCLUDE_PATH;?>sobre">Sobre</a></li>
                <li><a href="<?php echo INCLUDE_PATH;?>servicos">Serviços</a></li>
                <li><a href="<?php echo INCLUDE_PATH;?>contato">Contato</a></li>
            </ul>
        </nav>
        <nav class="mobile right">
            <div class="botao-menu-mobile">
            <i class="fa-solid fa-bars"></i>
            </div>
            <ul>
                <<li><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
                <li><a href="<?php echo INCLUDE_PATH;?>sobre">Sobre</a></li>
                <li><a href="<?php echo INCLUDE_PATH;?>servicos">Serviços</a></li>
                <li><a href="<?php echo INCLUDE_PATH;?>contato">Contato</a></li>
            </ul>
        </nav>
        </div><!--center-->
        <div class="clear"></div><!--clear-->
    </header>

    <section class="banner-principal">
        <div class="overlay"></div><!--overlay-->
        <div class="center">
        <form>
            <h2>Qual o seu melhor e-mail?</h2>
            <input type="email" name="required">
            <input type="submit" name="acao" value="Cadastrar!">
        </form>
        </div><!--center-->
    </section><!--banner-principal-->

    <section class="descricao-autor">
        <div class="center">
        <div class="w50 left">
            <h2>Eric Moraes</h2>
            <p >Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                Aut quod doloremque quasi error praesentium, aperiam ipsam quas. 
                Qui consequuntur dolor vero? Esse voluptas quibusdam earum magni 
                temporibus perspiciatis tempore accusantium.</p>
            <p >Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                Aut quod doloremque quasi error praesentium, aperiam ipsam quas. 
                Qui consequuntur dolor vero? Esse voluptas quibusdam earum magni 
                temporibus perspiciatis tempore accusantium.</p>
                <p >Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                Aut quod doloremque quasi error praesentium, aperiam ipsam quas. 
                Qui consequuntur dolor vero? Esse voluptas quibusdam earum magni 
                temporibus perspiciatis tempore accusantium.</p>
        </div><!--w50-->
        <div class="w50 left">
            <!--Pegar imagem depois-->
            <img class="right" src="<?php echo INCLUDE_PATH; ?>images/foto.jpg" width="320" height="205">
        </div><!--w50-->
        <div class="clear"></div><!--clear-->
        </div><!--center-->
    </section><!--descricao-autor-->

    <section class="especialidades">
    
    <div class="center">
        <h2 class="title">Especialidades</h2>
        <div class="w33 left box-especialidade">
            <h3><i class="fa-brands fa-css3"></i></h3>
            <h4>CSS3</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Provident hic officia nostrum natus itaque rem, 
                 sed nesciunt iste soluta. Nemo, officia ratione. 
                 Porro, optio quasi! In aliquid officia aspernatur quam.</p>
        </div><!--box-especialidade-->
        
        <div class="w33 left box-especialidade">
            <h3><i class="fa-brands fa-html5"></i></h3>
            <h4>HTML5</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Provident hic officia nostrum natus itaque rem, 
            sed nesciunt iste soluta. Nemo, officia ratione. 
            Porro, optio quasi! In aliquid officia aspernatur quam.</p>
        </div><!--box-especialidade-->
        <div class="w33 left box-especialidade">
            <h3><i class="fa-brands fa-js"></i></h3>
            <h4>JavaScript</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Provident hic officia nostrum natus itaque rem, 
            sed nesciunt iste soluta. Nemo, officia ratione. 
            Porro, optio quasi! In aliquid officia aspernatur quam.</p>
        </div><!--box-especialidade-->
        <div class="clear"></div><!--clear-->
    </div><!--center-->

   </section><!--especialidades-->
   <section class="extras">

        <div class="center">
            <div class="w50 left depoimentos-container">
                <h2 class="title">Depoimentos</h2>
                <div class="depoimento-single">
                        <p class="depoimento-descricao">"Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Voluptatum velit ea totam molestiae vel sequi ipsum. 
                        Dolor nihil dicta rerum at facere eaque possimus? Minus 
                        voluptates magnam quidem beatae illum?"</p>
                        <p class="nome-autor">Lorem ipsum </p>
                </div><!--depoimento-single-->
                <div class="depoimento-single">
                        <p class="depoimento-descricao">"Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Voluptatum velit ea totam molestiae vel sequi ipsum. 
                        Dolor nihil dicta rerum at facere eaque possimus? Minus 
                        voluptates magnam quidem beatae illum?"</p>
                        <p class="nome-autor">Lorem ipsum </p>
                </div><!--depoimento-single-->
                <div class="depoimento-single">
                        <p class="depoimento-descricao">"Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Voluptatum velit ea totam molestiae vel sequi ipsum. 
                        Dolor nihil dicta rerum at facere eaque possimus? Minus 
                        voluptates magnam quidem beatae illum?"</p>
                        <p class="nome-autor">Lorem ipsum </p>
                </div><!--depoimento-single-->
            </div><!--w50-->
            <div class="w50 left servicos-container">
                <h2 class="title">Serviços</h2>
                <div class="servicos">
                <ul>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore perspiciatis perferendis,
                        praesentium tenetur non ipsam placeat! Officiis soluta earum iste adipisci eos eius, 
                        impedit quos amet placeat, cumque illum aspernatur!</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore perspiciatis perferendis,
                        praesentium tenetur non ipsam placeat! Officiis soluta earum iste adipisci eos eius, 
                        impedit quos amet placeat, cumque illum aspernatur!</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore perspiciatis perferendis,
                        praesentium tenetur non ipsam placeat! Officiis soluta earum iste adipisci eos eius, 
                        impedit quos amet placeat, cumque illum aspernatur!</li>
            
                </ul>
                </div><!--servicos-->
            </div><!--w50-->
            <div class="clear"></div><!--clear-->
        </div><!--center-->

   </section><!--extras-->

   <footer>
    <div class="center">
        <p>Todos os direitos reservados</p>
    </div><!--center-->
   </footer>
   <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
   <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
</body>
</html>