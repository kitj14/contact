<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subj = $_POST['subject'];
    $msg = $_POST['message'];

    $mailTo = "danilo.palen@yahoo.com";
    $header = "From :".$email;
    $txt = "Message from ".$name.".\n\n".$msg;

    mail($mailto, $subj, $txt, $header);
    header("Location: contact.php?mailsent")

}