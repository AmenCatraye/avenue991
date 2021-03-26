<?php
if($_POST)
{
    $to_Email   	= "amencatraye@gmail.com"; //Replace with recipient email address
    $subject        = 'Contact/Client'; //Subject line for emails


    //check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {

        //exit script outputting json data
        $output = json_encode(
        array(
            'type'=>'error',
            'text' => 'Request must come from Ajax'
        ));

        die($output);
    }

    //check $_POST vars are set, exit if any missing
    if(!isset($_POST["userName"]) || !isset($_POST["userEmail"]) || !isset($_POST["userMessage"]))
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Champ vide!'));
        die($output);
    }

    //Sanitize input data using PHP filter_var().
    $user_Name        = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
    $user_Email       = filter_var($_POST["userEmail"], FILTER_SANITIZE_EMAIL);
    $user_Phone =  $_POST["userPhone"];
    //$user_Subject =  $_POST["userSubject"];
    $user_Message     = filter_var($_POST["userMessage"], FILTER_SANITIZE_STRING);

    //additional php validation
    if(strlen($user_Name)<3) // If length is less than 3 it will throw an HTTP error.
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Nom complet absent ou incorrecte!'));
        die($output);
    }
    if(!filter_var($user_Email, FILTER_VALIDATE_EMAIL)) //email validation
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Merci de saisir une adresse mmail valide!'));
        die($output);
    }

    if(strlen($user_Message)<5) //check emtpy message
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Message trop court! Merci de saisir quelque chose.'));
        die($output);
    }


    $message_Body = "<strong>Name: </strong>". $user_Name ."<br>";
    $message_Body .= "<strong>Email: </strong>". $user_Email ."<br>";
    $message_Body .= "<strong>Phone: </strong>". $user_Phone ."<br>";
   // $message_Body .= "<strong>Subject: </strong>". $user_Subject ."<br>";
    $message_Body .= "<strong>Message: </strong>". $user_Message ."<br>";



    $headers = "From: " . strip_tags($user_Email) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($user_Email) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";



    //proceed with PHP email.
    /*$headers = 'From: '.$user_Email.'' . "\r\n" .
    'Reply-To: '.$user_Email.'' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    */


    $sentMail = @mail($to_Email, $subject, $message_Body, $headers);

    if(!$sentMail)
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Impossible d\'envoyer le message ! Veuillez réessayer dans quelques minutes.'));
        die($output);
    }else{
        $output = json_encode(array('type'=>'message', 'text' => 'Salut '.$user_Name .', la Team 991 vous remercie.'));
        die($output);
    }
}
?>