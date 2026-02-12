<?php

$error = "";

if(!isset($_POST['name']) || $_POST['name']=="")
{
    $error .="\nName is required";
}
else
{
    if(!preg_match('/^[a-zA-Z\\s]*$/',$_POST['name']))
    {
        $error .="\nEnter valid Name";
    }
}

if(!isset($_POST['email']) || $_POST['email']=="")
{
    $error .=" \nEmail Id is required";
}
else
{
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
    {   
        $error .=" \nEnter valid Email Id";
    }
}

if(!isset($_POST['message']) || trim($_POST['message'])=="")
{
    $error .=" \nMessage is required";
}

if($error=="")
{
    $page1 = $_POST['page'];
    $to = "sales@dotphi.com, backupilogicx@gmail.com, bhupendra.kalambe@googlemail.com";
    $subject = "Enquiry For ".$page1;

    $message = "
    <html>
    <body>
    <table border='1' cellpadding='10'>
        <tr>
            <td colspan='2' style='color:#C50B33; font-size:20px;'>
                <b>Request For $page1</b>
            </td>
        </tr>
        <tr>
            <td><b>Name :</b></td>
            <td>".$_POST['name']."</td>
        </tr>
        <tr>
            <td><b>Phone :</b></td>
            <td>".$_POST['phone']."</td>
        </tr>
        <tr>
            <td><b>Email :</b></td>
            <td>".$_POST['email']."</td>
        </tr>
        <tr>
            <td><b>Message :</b></td>
            <td>".$_POST['message']."</td>
        </tr>
    </table>
    </body>
    </html>
    ";

    // Headers
    $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: no-reply@yourdomain.com" . "\r\n";
    $headers .= "Reply-To: ".$_POST['email']."\r\n";

    if(mail($to, $subject, $message, $headers))
    {
        // Auto Reply
        $auto_subject = "Thank You For Contacting Us";
        $auto_message = "Thank You....We Will Get Back To You Soon..";

        $auto_headers  = "MIME-Version: 1.0" . "\r\n";
        $auto_headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $auto_headers .= "From: no-reply@yourdomain.com" . "\r\n";

        mail($_POST['email'], $auto_subject, $auto_message, $auto_headers);

        echo "sent";
    }
    else
    {
        echo "Sorry, error occurred while sending mail. Please try again.";
    }

}
else
{   
    echo $error;
}
?>
