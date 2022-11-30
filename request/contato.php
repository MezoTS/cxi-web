<?php
$nome= $_POST['nome'];
$email = $_POST['email'];
$mensagem= $_POST['mensagem'];
$formcontent="Mensagem enviada por: $nome - $email n Texto: $mensagem";
$recipient = "elivyhe32@gmail.com";
$subject = "Formulário de contato - Clube de Xadrez";
$mailheader = "De: $email rn";
mail($recipient, $subject, $formcontent, $mailheader) or die("Erro!");
echo  "<script>alert('Email enviado com Sucesso!');location.href='https://www.intermezo.olharvisual.com.br'</script>";
?>