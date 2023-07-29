<?
session_start();
$curruserid = $_SESSION['userid'];
if ($curruserid == "0" or $curruserid == "")
{

	include '../sessionexpired.php';

}
else
{
//$currid = $_GET['tableid'];
$username="group708";
$password="LSM321";
$database="group708";

?>
<HTML>
	<HEAD>
		<title>Restaurant</title>
		<link href="blue.css" rel="stylesheet" type="text/css">
		<?
			mysql_connect(localhost,$username,$password);
			@mysql_select_db($database) or die( "Unable to select database");
			//$query = "update _table set status = 'ready', employeeid = NULL where id = $currtableid";
			$query = "update payroll set timeout = current_timestamp where id = " . $curruserid . " and timeout = '0000-00-00 00:00:00'";
			mysql_query($query);
			//echo "Record Updated";
			mysql_close();
		?>
		<META HTTP-EQUIV="refresh" content="3; URL=logout.php">
	</HEAD>
	<body MS_POSITIONING="GridLayout" background="images\tabsleft.gif">
		<div id = "statuslegend">
		<ul>
			<font color = "white">
			Your request for timeout has been processed.
			<br><br><br>
			You are being redirected to the "Login" page.
			<a href = "logout.php"><span>If redirect fails, click here</a> </span><br>
			</ul>
		</div>
	</body>
</HTML>
<?
}
?>

