<section class="banner-container">
    <div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/bg-form.jpg');" class="banner-single"></div><!--banner-single-->
    <div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/image1.jpg');" class="banner-single"></div><!--banner-single-->
    <div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/image2.jpg');" class="banner-single"></div><!--banner-single-->
    <div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/bg.jpg');" class="banner-single"></div><!--banner-single-->
        <div class="overlay"></div><!--overlay-->
        <div class="center">
            <?php 
                if(isset($_POST['acao'])){
                    //Enviei o formulario
                    if($_POST['email'] != ''){
                        $email = $_POST['email'];
                        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                            //tudo certom é um email.
                            //só enviar
                            $mail = new Email('aquivaimeuhost','aqui meu user name da host','aqui a senha do host', 'nome da pessoa');
                            $mail->addAdress('ericmoraes1998@gmail.com','Eric');
                            $corpo= "Email cadastrado na home do site: <hr>$email";
                            $info = array('assunto'=>'um novo email cadastrado no site','corpo'=>$corpo);
                            $mail->formatarEmail($info);
                            if($mail->enviarEmail()){
                                echo 'Enviado com sucesso!';
                            }else{
                                echo 'Algo deu errado';
                            }
                        }else{
                            echo 'Não é um email valido.';
                        }
                        
                    }else{
                        echo 'Insira um email válido.';
                    }
                }
            ?>
        <form method="post">
            <h2>Qual o seu melhor e-mail?</h2>
            <input type="email" name="email" required>
            <input type="submit" name="acao" value="Cadastrar!">
        </form>
        </div><!--center-->
        <div class="bullets"></div><!--bullets-->
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
            <div id="depoimentos" class="w50 left depoimentos-container">
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
            <div id="servicos" class="w50 left servicos-container">
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