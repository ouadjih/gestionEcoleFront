<?php session_start();
	include_once 'fonction/connection.php';
	include_once'fonction/inscription.class.php';
	$bdd=bdd();
	if(isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['email']) AND isset($_POST['numtel']) AND isset($_POST['adresse']) AND isset($_POST['anneeN']) AND isset($_POST['mdp']) AND isset($_POST['mdp2']))
 		{
 			$inscription = new inscription($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['numtel'],$_POST['adresse'],$_POST['anneeN'],$_POST['mdp'],$_POST['mdp2']);
 		}
 		$verif = $inscription->verif();

 	if($verif == 'ok'){/*tout est bon */}
 		else
 			{$erreur=$verif;}
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Forum</title>
</head>

<body>
	<h1>INSCRIPTION</h1>
	<div id="cforum">
		<form method="POST" action="inscription.php">
			<p>
				<input type="text" name="nom" placeholder="nom..."> <br />
				<input type="text" name="prenom" placeholder="prenom..."> <br />
				<input type="email" name="email" placeholder="email..."> <br />
				<input type="number" name="numtel" placeholder="numtel..."> <br />
				<input type="text" name="adresse" placeholder="adresse..."> <br />
				<input type="date" name="anneeN" placeholder="date de naissance..."> <br />
				<input type="password" name="mdp" placeholder="mot de passe..."> <br />
				<input type=password name="mdp2" placeholder="mot de passe de confirmation"> <br />
				<input type="submit"  placeholder="s'inscrire">
				<?php
				 if(isset($erreur))
				{
					echo $erreur;
				}
				?>

			</p>
			
		</form>
		
	</div>
	

</body>
</html>