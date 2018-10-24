<?php
    $to = 'sejawell@gmail.com';
    $from = $_POST["fname"];
    $to= $_POST["email"];
    $to= $_POST["tel"];
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $fname . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$fname.'  '.$email.'</td>
        </tr>
        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo 'Entraremos em contato em breve.';
    }else{
        echo 'falhou';
    }

?>
