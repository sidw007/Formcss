<?php

$nome = addslashes($_POST['nome'])
$email = addslashes($_POST['email'])
$estado = addslashes($_POST['uf'])

$to = "sidw007@gmail.com";
$subject = "Inscrição - 9T Educação";
$body = "Nome: ".$nome. "\n".
        "Email: ".$email. "\n".
        "Estado: ".$uf;
$header = "From: conatato@9T.com"."\n".
          "Replay-To:".$email."\n".
          "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){

  echo("Email enviado com sucesso")

} else{
  echo{
    
    echo("Email não pode ser enviado")

  }
}


?>