<?php
if (isset($_POST['submit'])) {
    $firstname = $_POST['inputFirstName'];
    $lasttname = $_POST['inputLastName'];
    $mailFrom = $_POST['inputEmail'];
    $message = $_POST['message'];

    $mailTo = "h.usma-2806@hotmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have receved a message from".$firstname.$lasttname.".\n\n".$message;


    mail($mailTo, $txt, $headers);
    header("Location: index.php?mailsend");

}