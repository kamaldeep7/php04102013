<?php
if(isset($_REQUEST['submit1'])){
echo $_REQUEST['fname'];
echo $_REQUEST['lname'];
echo $_REQUEST['email'];
echo $_REQUEST['pass'];
}
?>

<html>
<head>

	<title>Testing Githubssss</title>
</head>
<body>
	<form action="#" method="post">
		First Name: <input type="text" name="fname" placeholder="Enter first name"><br><br>
		Last Name: <input type="text" name="lname" placeholder="Enter last name"><br><br>
		E-mail:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="email" placeholder="abx@xyz.com"><br><br>
		Password: &nbsp;&nbsp;<input type="text" name="pass" placeholder="Password"><br><br>
		<input type="Submit" name="submit">
		<input type="reset" name="reset">
	</form>

</body>
</html>