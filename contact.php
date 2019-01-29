<?php
include 'config.php';

$name= $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$f=false;
$errMsg1="";
if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
{
	$errMsg1= "Only letters and white space allowed in name.";
    $f=	true;
}
  
if($f==true)
{  
echo "<script>alert('$errMsg1');window.location='index.html#contact';</script>";
}
else
{
	
       
            $insert_registration=mysql_query("Insert into `contactus` values('$name','$email','$subject','$message')");
	        if($insert_registration)
	        {
              echo "<script>alert('Thanks for Showing interest in Ignite');window.location ='index.html';</script>"; 
	        }
	        else
	        {
              echo "<script>alert('Error occured. Please try again.');window.location ='index.html';</script>";
            }
}
		


?>