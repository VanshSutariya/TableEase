<?session_start();
$curruserid = $_SESSION['userid'];
if ($curruserid == "0" or $curruserid == "")
{
	echo "Stop trying to hack in!";
}
?>