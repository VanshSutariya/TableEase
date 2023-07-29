<?
session_start();
$_SESSION['userid'] = "0"
?>

<HTML>
	<HEAD>
		<title>Restaurant</title>
		<link href="blue.css" rel="stylesheet" type="text/css">
		<META HTTP-EQUIV="Refresh" CONTENT="1; URL=login.php">
	</HEAD>
	<body>
		<div id = "statuslegend">
		<ul>
		<font color = "white">
		You have been logged out.<br><br>
		Redirecting to home page.<br>
		<a href = "login.php"><span>If redirect fails, click here</span></a><br>
		</font>
		</ul>
		</div>
</body>
</html>