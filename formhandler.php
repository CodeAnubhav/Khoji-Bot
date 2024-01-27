<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = "New Lead From Our Site";  
    $emailFrom = $_POST['email'];
    $message = $_POST['message'];

    $emailTo = "anubhav.singh@worka.me"; // Change receiver address 
    $headers = "From: ".$emailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    if (mail($emailTo, $subject, $txt, $headers)) {
        echo '<div style="background-color: #000; color: #ecf0f1; padding: 20px; text-align: center; font-size: 35px; font-weight: bold;">
                Message sent successfully. Redirecting...
              </div>';
        // Use JavaScript to redirect after 3 seconds
        echo '<script>
                setTimeout(function() {
                    window.location.href = "index.php"; // Replace with your index page URL
                }, 3000);
              </script>';
    } else {
        echo '<div style="background-color: #e74c3c; color: #ecf0f1; padding: 20px; text-align: center; font-size: 18px; font-weight: bold;">
                Error sending the message.
              </div>';
    }
}
?>
