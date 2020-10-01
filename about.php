<?php
include 'includes/header.php'
?>
<br>
<h3 style="text-align: center;">This is <mark>about</mark> section of web page and here lies the main content.</h3>
<br>
<?php
	if (!isset($_COOKIE[$randomcookie])) {
		echo "<h2> Cookie name not set";
	}
	else
	{
		echo "Cookie ".$randomcookie." is set<br>";
		echo "and the value is " .$cookievalue;
	}
?>
<?php
	if (!isset($_SESSION['userid'])) {
		echo "<br><h2>You are not currently authenticated</h2>";
	}
	else
	{
		echo "<br>Session is available and you are logged in as :".$_SESSION['userid'];
	}
?>
<br>
<?php
include 'includes/footer.php'
?>
<br>