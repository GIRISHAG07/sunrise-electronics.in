<?php 
    $name=$_POST['name']; 
    $email=$_POST['email']; 
    $message=$_POST['message']; 
    if (($name!="")||($email!="")||($message!="")) 
        {         
        $from="From: $name<$email>\r\nReturn-path: $email";
        // Change subject
        $subject="Message sent using your contact form";
        // Replace with your email
        mail("girishg7349@gmail.com", $subject, $message, $from); 
        echo "Email sent!"; 
        }    
?>