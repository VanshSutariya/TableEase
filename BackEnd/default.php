<?
session_start();
if ($_SESSION['userid'] == "0" or 	$_SESSION['userid'] == "")
{
	$Employeeid = $_POST['employeeid'];
	$epassword = $_POST['password'];

	$username = "group708";
	$password = "LSM321";
	$database = "group708";

	mysql_connect(localhost,$username,$password);
	@mysql_select_db($database) or die( "Unable to select database");
	$query = "select * from employee where id = " . $Employeeid . " and password = " . $epassword;
	$result = mysql_query($query);
	$valid = mysql_numrows($result);
	mysql_close();
}
?>

<HTML>
	<HEAD>
		<title>Restaurant</title>
		<link href="blue.css" rel="stylesheet" type="text/css">
<?
if($valid == 1)
	{
		//echo "Login Valid!";
		$_SESSION['userid'] = $Employeeid;
		$user_type=mysql_result($result,0,"type");
		$url_togo = $user_type."/view_tables.php"
?>
		<META HTTP-EQUIV="Refresh" CONTENT="1; URL=<?=$url_togo?>">
	</HEAD>
	<body>
		<div id = "statuslegend">
		<ul>
		<font color = "white">
		Login <font color = "green"> Succesfull. </font> Identified as <?=$user_type?>.<br>
		You are being redirected to your main page.<br>
		<br>
		<a href = "<?=$user_type?>/view_tables.php"><span>If redirect fails, click here</span></a><br>
		</font>
		</ul>
		</div>
<?
		mysql_connect(localhost,$username,$password);
	@mysql_select_db($database) or die( "Unable to select database");

	$query = "select * from payroll where id = " . $Employeeid . " and timeout = '0000-00-00 00:00:00'";
	$result = mysql_query($query);
	$timedin = mysql_numrows($result); // if user already timed in then this will be 1 else 0

	if($timedin == 1)
	{
	// keep viewing tables
	//do nothing
	}
	else
	{
			$query = "insert into payroll(id, timein) values (" . $Employeeid . ", current_timestamp)";
			//$query = "insert into payroll(id, timein) values (1, current_timestamp)";
			$result = mysql_query($query);
			echo "Inserted the timed in value";
	}
	mysql_close();

	}
	else
	{
		//echo "Login Failed!";
		$_SESSION['userid'] = "0";
?>
		<META HTTP-EQUIV="Refresh" CONTENT="4; URL=login.php">
	</HEAD>
	<body>
		<div id = "statuslegend">
		<ul>
		<font color = "white">
		Login <font color = "red"> Failed. </font><br>
		You are being redirected to the login page.
		<a href = "login.php"><span>If redirect fails, click here</a> </span><br>
		</ul>
		</div>
<?
	}
?>

</body>
</html>