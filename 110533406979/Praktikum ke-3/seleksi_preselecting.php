<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Seleksi Preselecting (Studi Kasus 1)</title>
</head>

<body>
  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
  Man of the match "Manchester United vs Sunderland":
	<select name="match">
		<option value="Wayne Rooney" />Wayne Rooney
		<option value="Adnan Januzaj" selected="yes" />Adnan Januzaj
		<option value="David De Gea" />David De Gea
		<option value="Robin van Persie" />Robin van Persie
	</select>
	<br />
  <input type="submit" value="OK" />
</form>

<?php
	if (isset($_POST['match'])){
		echo $_POST['match'];
	}
?>
</body>
</html>