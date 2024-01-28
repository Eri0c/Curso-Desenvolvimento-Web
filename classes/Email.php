<?php 

    class Email
    {

        private $mailer;
        public function __construct($host,$username,$senha,$name)
        {
            $this->mailer = new PHPMailer;

            //Server settings
                            
            $this->mailer->isSMTP();                                            //Send using SMTP
            $this->mailer->Host       = $host;                     //Preciso ter uma host
            $this->mailer->SMTPAuth   = true;                                   //Enable SMTP authentication
            $this->mailer->Username   = $username;                     //Email da minha host
            $this->mailer->Password   = $senha;                               //Senha da minha host
            $this->mailer->SMTPSecure = 'ssl';                                  //Enable implicit TLS encryption
            $this->mailer->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $this->mailer->setFrom($username,$name);
            $this->mailer->isHTML(true);                                 //Set email format to HTML
            $this->mailer->CharSet = 'UTF-8';

        }
            
        public function addAdress($email,$nome){
            $this->mailer->addAddress($email,$nome);   
        }

        public function formatarEmail($info){
            $mail->Subject = $info['assunto'];
            $mail->Body    = $info['corpo'];
            $mail->AltBody = strip_tags($info['corpo']);

        }
        public function enviarEmail(){
            if($this->mailer-send()){
                return true;
            }else{
                return false;
            }
        }
    }


?>