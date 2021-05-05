<?php
  require 'vendor/autoload.php';
  
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  use PHPMailer\PHPMailer\SMTP;



  $pass = "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";
    class ContactForm {
        private $name;
        private $email;
        private $subject;
        private $message;

        public function setData($name, $email, $subject, $message) {
            $this->name = $name;
            $this->email = $email;
            $this->subject = $subject;
            $this->message = $message;
        }
// проверка формы 
        public function validForm() {
            if(strlen($this->name) < 3)
                return "Имя слишком короткое"; 
            else if(strlen($this->email) < 3)
                return "Email слишком короткий";
            else if(strlen($this->subject) < 10)
                return "Вы не ввели тему сообщения";
            else if(strlen($this->message) < 5)
                return "Сообщение слишком короткое";
            else
                return "Верно";
        }
//   отправка письма 
    public function send() {
        
     $mail=new PHPMailer();
    
    $mail->IsSMTP();  
    $mail->Host="smtp.sendgrid.net"; 
    $mail->SMTPAuth = true;  
    $mail->Username="apikey";
    $mail->Password = $pass;
    $mail->SMTPSecure = 'tls';
    $mail->Port = '587';
    $mail->CharSet = 'UTF-8';
    $mail->From = "test@com.ua";
    $mail->FromName = 'Anna';
    $mail->AddAddress('	anastasiasmeshko22@gmail.com','Анастасия');  
    $mail->Subject = "Тестовое письмо";
    $mail->Body    = <<<EOT
    Email: {$_POST['email']}
    Name: {$_POST['name']}
    Subject:{$_POST['subject']}
    Message: {$_POST['message']}
    EOT;

        if(!$mail->send())
            return 'Сообщение было не отправлено.<br> Ошибка: ' . $mail->ErrorInfo;
        else
            return "Письмо отправлено";
        }
    }

    

   