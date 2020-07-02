<?php 

$msg = '';
$err = '';
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $to = 'brightonline80@gmail.com';
        $subject = 'Form Submission';
        $message = "Sender Name:  ".$name."\n"."Message Sent:  "."\n\n".$message;
        $headers = "Sent From:  ".$email;

        if(mail($to, $subject, $message, $headers)) {
            $msg = "<div class='alert alert-success'>Your Message Was Successfully Sent! Thank You.  ;) </div>";
        }
        else {
            $err =  "<div class='alert alert-danger'>Something Went Wrong! Your Message Wasnt Sent, Please Try Again. :( </div>";
        }
    }



?>