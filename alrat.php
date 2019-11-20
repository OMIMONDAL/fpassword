<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1" />
</meta>
<script>
function validateForm() {
var x = document.forms["myFo­rm"]["fname"].value;
if (x == "10") {
alert("Name must be filled out");
return false;
}
}
</script>
</head>
<body>

<form name="myForm" action="home.php" onsubmit="return validateForm()" method="post">
Name: <input type="text" name="fname">
<input type="submit" value="Submit">
</form>

</body>
</html>