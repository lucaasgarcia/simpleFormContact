<?php
    $to = "contato@contato.com.br"; //destinatario
    $assunto = "Simple form PHP";
    $mensagem = $_POST['mensagem']." <br><br> ".$_POST['nome'];
    $email = $_POST['email']; //remetente

    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    $headers[] = 'To: $to';
    $headers[] = 'From: $email';

    $status = mail($to, $subject, $message, implode("\r\n", $headers));

    if($status==true){
        print "mensagem enviada com sucesso!";
    }else{
        print "Nao foi possivel enviar";
    }
