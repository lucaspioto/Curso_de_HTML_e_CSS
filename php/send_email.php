<?php

# alterar a variavel abaixo colocando o seu email

$destinatario = "lucaspioto@gmail.com";

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$mensagem = $_REQUEST['mensagem'];

 // monta o e-mail na variavel $body

 $body 			= "
 Nome: 		  ".$nome." 
 Email: 		".$email."
 Mensagem:	".$mensagem."
";

// envia o email
mail($destinatario, $body, "From: $email\r\n");

// redireciona para a página de obrigado
header("location:http://firedlabs.camorii.com.br/#contatos");


?>