<?php
session_start();

$con = mysqli_connect('localhost','root');
  if($con){
	echo "successful";
}else{
	echo "successf";
}
mysqli_select_db($con, 'omimondal');

$name = $_POST['name'];
$clint = $_POST['clint'];


$q="select * from fpassword where name ='$name' && password = '$clint'";

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

  if($num==1){
	echo "successful";
}else{
	$qy="insert into fpassword (name,clint)value('$name','$clint')";
	mysqli_query($con,$qy);
	echo "ami";
}
?>