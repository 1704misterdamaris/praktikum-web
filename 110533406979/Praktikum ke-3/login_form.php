<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Login Form</title>
</head>

<body>

	<h3>Welcome</h3>
	<form name="form_test" method="post" action="<?php $_SERVER['PHP_SELF'];?>" onSubmit="return continue(this)">
		<p>
			<label for="user">Username </label>
			<input name="user" id="user" type="text" placeholder="Username"/>
		</p>
		<p>
			<label for="password">Password </label>
			<input name="password" id="password" type="password" placeholder="Password"/>
		</p>
		<p><input type="submit" name="submit" value="Login"></p>
	</form>

	<?php
		$user = $_POST['user'];
		$password = $_POST['password'];
		if(isset($user) || (isset($password))){
			require("continue.php");
		}
	?>

</body>
</html>