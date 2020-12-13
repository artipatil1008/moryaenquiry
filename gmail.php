<?php 
if(isset($_POST['submit'])){
    $to = "infomaasworld@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $pack = $_POST['pack'];
	$mes  = $_POST['mes'];

    $subject = "Website Feedback";
    $subject2 = "Copy of your form submission";
    $message = "\n Name : ".$name . "\n Packages : " . $pack . " \n Meassage : " . $mes . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you Requrment " . $name. ", we will contact.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
