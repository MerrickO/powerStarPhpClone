<?php
// get form values
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $tel = $_POST['telNo'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $page_title = $_POST['pageName'];

    // powersc admin email
    $email = "admin@powerstarsc.com";
    $test_email = "programmerscodes@gmail.com"; 
    // echo("<h1>Results</h1>");
    // echo("Hello {$message}, {$tel}, {$email},{$page_title}");
if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    echo("Hello WOrld");
    $to = "email@example.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " " . $surname . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail("merrickowenmorris@gmail.com",$subject,$message, $headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.

} else {
    // error if no values are received
}

if(isset($_POST['submit'])){
    
    }
?>