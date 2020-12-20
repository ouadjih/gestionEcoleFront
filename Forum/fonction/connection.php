<?php
		function bdd()
		{
			try
			{
			$pdo_options[PDO :: ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
			$bdd = new PDO('mysql:host=localhost;dbname=gest_ecole','root','');
			
			return $bdd;
			}
			catch(Exception $e)
			{
				die("ERR : ".$e->getMessage());
			}
		}
?>