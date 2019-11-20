<?php
  $username = $_POST['username'];
  $number = $_POST['email'];
  $password = $_POST['password'];
 
 
 if(!empty($username) ||!empty($email)|| !empty($password)){
	$host="localhost";
    $dbusername="root";
    $dbpassword=" ";
    $dbname="omi";
	
	$conn=new mysqli($host, $dbusername, $dbpassword, $dbname);
	if(mysqli_connect_error()){
		die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}else{
		$SELECT="SELECT email form registar Where email =? Limit 1";
	     $INSERT="INSERT into registar(username,email,password) values(?,?,?,)";
		 
		 
		 $stmt = $conn->prepare($select);
		 $stmt->bind_param("s",$email);
		 $stmt->execute();
		 $stmt->bind_result($email);
		 $stmt->stor_result();
		 $rnum = $stmt->num_rows;
		 
		 if ($runm ==0){
			 $stmt->close();
			 
			 $stmt = $conn->prepare($INSERT);
			 $stmt->bind_param("ssssii",$username,$email,$password);
			 
			 $stmt->execute();
			 echo"someone alredy registar using this email ";
		 }else{echo"hello everone";
	  }
		 $stmt->close();
		 $conn->close();
	}
 }else{
	 echo "all field are required";
	 die();
 }
	 
 
?>