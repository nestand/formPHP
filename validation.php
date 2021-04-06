<?php
 
 require_once 'formulaire.php'; 

 class User {
     protected $visitor_name;
     protected $visitor_email;
     protected $visitor_message;    
    } 
    function __construct($nameU, $emailU, $messageU)
    {
        $this->name = $nameU;
        $this->email = $emailU;
        $this->message = $messageU;
       

        if ($_POST) {
            $visitor_name = "";
            $visitor_email = "";
            $visitor_message = "";
     
            if (isset($_POST['visitor_name'])) {
                $visitor_name = filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING);
            }
     
            if (isset($_POST['visitor_email'])) {
                $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
                $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
            }
     
            if (isset($_POST['visitor_message'])) {
                $visitor_message = htmlspecialchars($_POST['visitor_message']);
            } else {
                $recipient = "contact@domain.com";
            }
     
            $headers  = 'Validation form' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $visitor_email . "\r\n";
     
            if (mail($visitor_email, $visitor_message, $headers)) {
                echo "<p>Merci pour votre message, $visitor_name. Le service vous contactera.</p>";
            } else {
                echo '<p>Recontactez notre service encore.</p>';
            }
        } else {
            echo '<p>Une erreur technique est survenue</p>';
        }
    }
?>