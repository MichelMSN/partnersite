<?php

if(isset($_POST(['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['name']);
$email = addslashes($_POST(['email']);
$mensagem = addslashes($_POST(['message']);



$to = "michel_073@hotmail.com";
$subject = "Contato - Programador Br";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email. "\r\n".
        "Mensagem: ".$mensagem;
$header = "Fron:michel_073@hotmail.com"."\r\n".
            ."Reply-to:".$email. "\e\n".
            ."X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){

    echo("Email enviado com sucesso!");
}else{
    echo("O email não pode ser enviado");
}

}

?>