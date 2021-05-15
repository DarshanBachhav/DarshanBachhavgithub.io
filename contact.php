<?php


$name=$_REQUEST['name'];
$email=$_REQUEST['Email'];
$message=$_REQUEST['Message'];


if(empty($name)||empty($email)||empty($message))
{
    echo "Please fill all the credentials";
}
else{
    mail("darshanbachhav0@gmail.com",Webtech Message,$message,"From:$name <$email>");
    echo "<script type='text/javascript'>alert('Your Message is sent successfully');
    window.history.log(-1);
    
    </script>";


}
?>