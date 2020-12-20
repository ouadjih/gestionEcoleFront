<?php
	class inscription
	{
		private $nom,$prenom,$email,$numtel,$adresse,$mdp,$mdp2,$anneN;

		public function __consrtruct($nom,$prenom,$email,$numtel,$adresse,$anneN,$mdp,$mdp2)
		{
			$this->nom=htmlspecialchars($nom);
			$this->prenom=htmlspecialchars($prenom);
			$this->email=htmlspecialchars($email);
			$this->numtel=htmlspecialchars($numtel);
			$this->adresse=htmlspecialchars($adresse);
			$this->mdp=htmlspecialchars($mdp);
			$this->mdp2 = $mdp2;
			$this->anneN=$anneN;

		}
		public function verif()
		{
			if(strlen($nom) > 2  AND strlen($nom) < 30)
			{return 'ok';

			}else/* false name */
			{
				$erreur = 'le nom doit etre entre 3 et 30 caracter';
				return $erreur;

			}
		}
	}
	
?>