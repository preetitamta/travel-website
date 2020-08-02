<?php
$Full_Name = $_POST['Full_Name'];
$Email_AddressFrom = $_POST['Email_Address'];
$Mobile_No = $_POST['Mobile_No'];
$Travel_Date = $_POST['Travel_Date'];
$person= $_POST['person'];
$Your_Message = $_POST['Your_Message'];

$mailTo = "preety.tamta0360@gmail.com";
$headers = "From: ".$Email_AddressFrom;
$email_body = "User message:$Full_Name.".\n\n".
              "User message:$Mobile_No.".\n\n".
               "User message:$Travel_Date.".\n\n".
               "User message: $Your_Message.\n";

mail($mailTo, $email_body, $headers);
header("Location: about.html");
?>