<?php session_start();
	include_once 'fonction/connection.php';
	$bdd=bdd();
	if(!isset($_SESSION['id']))
	{
		header('Location: inscription.php');
	}else
	{}


	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Forum</title>
</head>

<body>
		<h1>my forum</h1>
	<div id="cforum">
		</div>
	

</body>
</html>