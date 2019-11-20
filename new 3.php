<?php
 echo $_POST["number"];
  echo $_POST["password"];
 ?>
 
 
 <?php
  $host='localhost';
  $usar='root';
  $pass=' ';
  $db='omi';
  
  $con=mysqli_connect($host,$usar,$pass,$db);
   if($con)
	   echo'connected successfully';
   $sql="insert into fpassword (id,username,number,password) values ('12356',jhon',md@gamil.com',123647',)";
   $query=mysqli_query($con,$sql);
   if($query)
	   echo 'ok';
   ?>
   
   
   
   
   <?php
 echo $_POST["number"];
  echo $_POST["password"];
 ?>
 
 
 <?php
  $host='localhost';
  $usar='root';
  $pass=' ';
  $db='omi';
  
  $con=mysqli_connect($host,$usar,$pass,$db);
   if($con)
	   echo'connected successfully';
   $sql="insert into fpassword (id,username,number,password) values ('12356',jhon',md@gamil.com',123647',)";
   $query=mysqli_query($con,$sql);
   if($query)
	   echo 'ok';
   ?>
   
   
   
    <?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if($_SERVER["REQUEST­_METHOD"] == "POST") {
if(empty($_POST["nam­e"])) {
$nameErr = "Name is required";
} else {
$name = test_input($_POST["n­ame"]);
// check if name only contains letters and whitespace
if(!preg_match("/­^[a-zA-Z ]*$/",$name)) {
$nameErr = "Only letters and white space allowed"; 
}
}

if(empty($_POST["ema­il"])) {
$emailErr = "Email is required";
} else {
$email = test_input($_POST["e­mail"]);
// check if e-mail address is well-formed
if(!filter_var($emai­l, FILTER_VALIDATE_EMAI­L)) {
$emailErr ="Invalid email format";
}
} 
?>