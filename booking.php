<?php
    $to = 'sejawell@gmail.com';
    $from = $_POST["fname"];
    $to= $_POST["email"];
    $to= $_POST["tel"];
    $text= $_POST["start"];
    $text= $_POST["arrival"];
    $text= $_POST["departure"];
    $text= $_POST["room-type"];
    $text= $_POST["no-room"];
    $text= $_POST["adults"];
    $text= $_POST["child"];
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $fname . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$fname.'  '.$email.'</td>
        </tr>
        <tr><td>Telefone: '.$tel.'</td></tr>
        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo 'The message has been sent.';
    }else{
        echo 'failed';
    }

?>
