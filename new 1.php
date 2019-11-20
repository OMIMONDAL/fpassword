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