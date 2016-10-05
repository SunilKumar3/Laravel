<html>
<head>
<title>My first PHP Website</title>
</head>
<body>
<h2>Registration Page</h2>
<a href="website.php">Click here to go back<br/><br/>
<form action="register.php" method="POST">
Enter Username: <input type="text" name="username" required="required"/><br/>
Enter password: <input type="password" name="password" required="required"/><br>
<input type ="submit" value="Register"/>
</form>
</body>
</html>

<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$username=mysql_real_escape_string($_POST['username']);
	$password=mysql_real_escape_string($_POST['password']);
	$bool = true;
	
	mysql_connect("localhost","root","") or die(mysql_error());// connect to server
	mysql_select_db("mydb") or die("cannot connect to database"); //connect to database
	$query=mysql_query("select * from users"); // Query the users table
	while($row = mysql_fetch_array($query)) // display all rows from query
	{
		$table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query
		if($username == $table_users)// checks if there are any matching fields
		{
			$bool = false;//set bool to false
			Print '<script>alert("username has been taken");</script>';//prompts the user_error
			Print '<script>window.location.assign("register.php");</script>';// redirects to register.php
		}
	}
	if($bool)// checks if bool is true
	{
		mysql_query("INSERT INTO users(username,password)VALUES('$username', '$password')");//Inserts the value to tab1e
		Print '<script>alert("Successfully Register!");</script>';//Prompts the user_error
		Print '<script>window.location.assign("register.php");</script>';//redirects to register.php
	}
}
?>
