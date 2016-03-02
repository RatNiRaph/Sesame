<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8-latin"/> <!--Encodage caractère-->
	<title>Discipline</title>
	<style>
	textarea {
		resize: none;
		}
		
	fieldset {
		margin-bottom: 35px;
		border: solid #4BB5C1 5px;
		border-right: none;
		border-bottom: none;
	}
	
	.left {
		display: inline-block;
		width: 160px;
		text-align: right;
		padding-right: 10px;
		vertical-align: top;
	}
	
	.left2 {
		margin-left: 7%;
	}
	
	input, textarea {
		margin-bottom: 4px;
	}
	
	label, input, textarea {
		padding: 4px;
	}
	
	
	.field {
		width: 400px;
	}
	
	#cp {
		width: 90px;
	}
	
	#vil {
		width: 254px;
	}
	
	input[required] {
		background: url('image/star.png') no-repeat top right;
	}
	</style>
</head>
<?php
	class connexion{
		private static $maBase;
		private static $monUtilisateur;
		private static $monMotDePasse;
		public static function ouvrir()
		{
			$db= new PDO('mysql:host=localhost; dbname=sesame', 'root', '');
			return $db;
		}
		}
	class discipline{
		private $numero;
		private $nom;
		public function __construct($numero, $nom)
		{
			$this->numero=$numero;
			$this->nom =$nom;
			
		}
		public  function getNom()
		{
			return $this->nom;
		}
		public  function getNumero()
		{
			return $this->numero;
		}
	}
	$db = connexion::ouvrir();
	$req='SELECT numero, nom
	FROM discipline
	ORDER BY nom';
	$resultat=$db->prepare($req);
	$resultat->execute();
	
	
?>
	<body>
		<fieldset><legend>Discipline</legend>
		<br>
			<label for="discipline">Discipline</label>
			<select id="discipline" name="discipline">
				<?php
					while($ligne=$resultat->fetch())
					{
					$d=new discipline($ligne["numero"], $ligne["nom"]);
					echo'<option value="' . $d->getNumero() . '">' . $d->getNom() .'</option>';
					}
				?>
			</select>
		</fieldset>
		
		<input class="left2" type="submit" value="Démarrer">
	</body>
	
</html>