<?php
if(isset($_POST['posted']))
{
    //getting form values
$name=trim($_POST['name']);
$email=trim($_POST['email']);
$subject=trim($_POST['subject']);
$user_message=trim($_POST['message']);
 $subject="Primitive Website";
// checking for empty values in form
if(empty($name) || empty($email) ||empty($subject) empty($user_message))
{
    header("Location:index.php?a=3");
}
// Preparing mail body
$message="<b>Message Form Primitive Website:</b> \r\n<br>";
$message.="<b>Email:</b>".$email."\r\n<br>";
$message.="<b>Full Name:</b>".$name."\r\n<br>";
$subject.="<b>Subject:</b>".$subject."\r\n<br>";
$message.="<b>Message:</b>".$user_message."\r\n<br>";
//Assign variable To Enter Email address 
$to="saikumarcme.sai2@gmail.com";
//Additional Headers
$headers="MIME-Version: 1.0"."\r\n";
$headers.="Content-type:text/html;charset=iso-8859-1"."\r\n";
$headers.='From:'.$email."\r\n";
//$headers.='Cc:'."\r\n";
//Responding mail function as
if(mail($to,$subject,$message,$headers))
{
    header("Location:index.html?e=5");
}
else{
    header("Location:index.html?e=7");
}
}
else
{
    header("Location:index.html?e=3");
}
?>