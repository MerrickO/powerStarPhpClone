<?php

if(isset($_POST['submit'])) {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $surname = filter_var($_POST['surname'], FILTER_SANITIZE_STRING);;
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $webpage = $_POST['pageName'];
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);;

    if(!empty($name) && !empty($email)) {
        $mailTo = "";
        $headers = "From: noreply@ai.net";
        $subject = 'This is a test email';
        $txt = "This email was sent from the ".$webpage." webpage. \n\n Name: " .$name. "\n Surname: ".$surname."\n Email: ".$email."\n Message:" .$message;
        $send_mail = mail($mailTo, $subject, $txt, "From: noreply@ai.net");
        
        if($send_mail == true) {
            $heading = "Success!!!";
            $status = "We will be in contact with you! :)";
            
        } else {
            $heading = "Something Went Wrong";
            $status = "Oops looks like there was a problem. Please do try once more.";
        }

        header("location: ./status_page.php");
    } else {
        header("location: ./contact.php");
    }

} else {
    $heading = "Internal Server Error";
    $status = "You will be redirected";
}
?>