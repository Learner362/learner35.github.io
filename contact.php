<?php
//variable setting
$Name =$_REQUEST['Name'];
$Phone no =$_REQUEST['Email'];
$Email =$_REQUEST['name'];
$Subject =$_REQUEST['Subject'];
$Message =$_REQUEST['Message'];

//check input fields
if (empty($Name) || (empty($Phone no) || (empty($Email) || (empty($Subject) || (empty($Message) ||)
{
  echo "Please fill all the fields";
}
else {
{
  mail(kanishksinha01@gmail.com, subject, $message , "From: $Name <$Email>");
  echo "<script type='text/javascript'>alert('your message sent successfully')
  window.history.log(-1);
  </script>";
}
 ?>
