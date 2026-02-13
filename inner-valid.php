<?php

$error = "";

$name   = $_POST['name'] ?? '';
$phone  = $_POST['phone'] ?? '';
$subject_msg = $_POST['subject'] ?? '';
$email  = $_POST['email'] ?? '';
$page1  = $_POST['page'] ?? '';

if($name == "")
{
    $error .= "\nName is required";
}
elseif(!preg_match('/^[a-zA-Z\s]*$/',$name))
{
    $error .= "\nEnter valid Name";
}

if($phone == "")
{
    $error .= "\nPhone is required";
}

if($subject_msg == "")
{
    $error .= "\nSubject is required";
}


if($error == "")
{
    $to = "backupilogicx@gmail.com";
    $subject = "Enquiry For ".$page1;

    $message = "
    <html>
    <body>
    <table border='1' cellpadding='10'>
        <tr>
            <td colspan='2'><b>Request For $page1</b></td>
        </tr>
        <tr>
            <td><b>Name :</b></td>
            <td>$name</td>
        </tr>
        <tr>
            <td><b>Phone :</b></td>
            <td>$phone</td>
        </tr>
    
        <tr>
            <td><b>Message :</b></td>
            <td>$subject_msg</td>
        </tr>
    </table>
    </body>
    </html>
    ";

    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8\r\n";
    $headers .= "From: panchangvaastu@gmail.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    if(mail($to, $subject, $message, $headers))
    {
        echo "sent";
    }
    else
    {
        echo "Mail sending failed (SMTP not configured on localhost)";
    }
}
else
{
    echo $error;
}
?>
