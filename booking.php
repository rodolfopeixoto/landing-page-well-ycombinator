<?php
$name = $_POST['name'];
//pega os dados que foi digitado no ID name.

$email = $_POST['email'];
//pega os dados que foi digitado no ID email.

$subject = "Formulário da landing page well"
//pega os dados que foi digitado no ID sebject.

// $message = $_POST['message'];
//pega os dados que foi digitado no ID message.
$headers = "From: " . $name . "\r\n"; // Sender's E-mail
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

/*abaixo contém os dados que serão enviados para o email
cadastrado para receber o formulário*/

$corpo = "Formulário enviado\n";
$corpo .= "Nome: " . $name . "\n";
$corpo .= "Email: " . $email . "\n";

$email_to = 'seu e-mail aqui que irá receber a mensagem';
//não esqueça de substituir este email pelo seu.

$status = mail($email_to, $subject, $corpo, $headers);
//enviando o email.

if ($status) {
  echo "<script> alert('Formulário enviado com sucesso!'); </script>";
  
//mensagem de form enviado com sucesso.

} else {
  echo "<script> alert('Falha ao enviar o Formulário.'); </script>";
  
//mensagem de erro no envio. 

}
?>
