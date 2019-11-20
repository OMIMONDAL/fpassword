<html>
<head>
</head>
<body>
<form method="post" action="face.php">
<input type="text"name="email"placeholder="Type Your Nmae"class="username">
<input type="text"name="password"placeholder="Type Your Nmae"class="username">
<input type="text"name="username"placeholder="Type Your Nmae"class="username">
<input type="submit"value="next"class="submit">
</from>
 <?php
  $host='localhost';
  $usar='root';
  $pass=' ';
  $db='omi';
   $sql="insert into fpassword (id,username,email,password)";

   ?>
</body>
</html>
