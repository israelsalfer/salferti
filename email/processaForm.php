<?php

$name= $_REQUEST["name"];
$email= $_REQUEST["israelsalfer@gmail.com"];
$subject= $_REQUEST["subject"];
$message= $_REQUEST["message"];

/*
$corpo = "<strong> Mensagem de Contato </strong><br><br>";
$corpo .= "<strong> Tipo de usuario: </strong> $user";
$corpo .= "<br><strong> Usuario: </strong> $usuario";
$corpo .= "<br><strong> Senha: </strong> $senha";
$corpo .= "<br><strong> Instituicao: </strong> $instituicao";
*/
$header = "Content-Type: text/html; charset= utf-8\n";
$header .="From: $email Reply-to: $email\n";

@mail($email, $assunto, $corpo, $header);
header("location:http://www.salferti.com.br/");


?>