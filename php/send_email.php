<?php
# ajusta o fuso horário
date_default_timezone_set('America/Sao_Paulo');

# alterar a variavel abaixo colocando o seu email

$destinatario = "lucaspioto@gmail.com";

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$mensagem = $_REQUEST['mensagem'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

 // monta o e-mail na variavel $body

 $body 			= "
 Nome: ".$nome." 
 Email: ".$email."
 Mensagem: ".$mensagem."
 Data: ".$data_envio."
 Hora: ".$hora_envio."
";

// envia o email
mail($destinatario, "Assunto: E-mail enviado pelo site!", $body);

// redireciona para a página de obrigado
header("location:http://firedlabs.camorii.com.br/#contatos");

?>