<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: loan-truong.fr'; 
    $to = 'loancrea@gmail.com'; 
    $subject = 'Hello';
    $human = $_POST['human'];
            
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
                
    if ($_POST['submit'] && $human == '4') {                 
        if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Votre message a bien été envoyé :) </p>';
    } else { 
        echo '<p>hum... petit problème, veuillez réessayer</p>'; 
    } 
?>