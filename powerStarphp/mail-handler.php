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
        mail($mailTo, $subject, $txt, "From: noreply@ai.net");
    
        echo("\n If you see this the email sent");
    } else {
        // header("refresh:5;url=contact.php");
    }

} else {
    echo("Could not submit the form");
}
?>