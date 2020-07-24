<?php

//print_r($_POST);

function has_header_validation($str){
    return preg_match("/[\r\n]" , $str);

}

if (isset($_POST['contact_submit'])) {
    $name= trim($_POST['name']);
    $email= trim($_POST['email']);
    $sub= trim($_POST['subject']);
    $msg= ($_POST['message']);


    if (has_header_validation($name) || has_header_validation($email) || has_header_validation($sub)) {
        die();
    }

    if (!$name || !$email || !$sub) {
        header("Location:formError.php");
        exit();
    }

    $to = "yourmail@gmail.com";

    $subject = "$name via SeePic form : $sub";

    $message = "Name: $name\r\n";
    $message .= "Email: $email\r\n";
    $message .= "Message: \r\n$msg";

    $message = wordwrap($message, 72);


    $header = "MIME-Version: 1.0 \r\n";
    $header .= "Content-type: text/plain; charset=iso-8859-1\r\n";
    $header .= "Form: $name <$email> \r\n";
    $header .= "X-Priority: 1\r\n";

    mail($to, $subject, $message, $header);

    header("Location:formSuccess.php");

 
}