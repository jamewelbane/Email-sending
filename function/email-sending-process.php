<?php

include("../database/connection.php");
include("email-function.php");
$captcha_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $fullname = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = $_POST["message"];




            if (empty($fullname) || empty($email) || empty($message)) {
                $errorMessage = "Error. Please complete the form ";
                if (empty($fullname)) {
                    $errorMessage .= "Fullname ";
                }
                
                if (empty($email)) {
                    $errorMessage .= "Email ";
                }
                if (empty($message)) {
                    $errorMessage .= "Message ";
                }
                handleValidationError($errorMessage);
            } else {

                // perform the sending process
                handleValidationSuccess("Email sent successfully!");
            }
        
    
}
