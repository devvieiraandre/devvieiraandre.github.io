<?php

    $name = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $phone = addslashes($_POST['phone']);
    $msg = addslashes($_POST['msg']);

    $para = "devvieiraandre@gmail.com";
    $assunto = "Contato da Landing Page - Pessoal";

    $corpo = "Nome: ".$name."\n". "Email: ".$email."\n"."Telefone: ".$phone."\n"."Mensagem: ".$msg;

    $cabeca = "From: devvieiraandre@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para, $assunto, $corpo, $cabeca)){
        echo("Mensagem enviada com sucesso!");        
    }else {
        echo("Erro ao enviar a mensagem! Verifique seus dados.");
    }

?>
