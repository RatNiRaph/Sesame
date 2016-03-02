<?php

			try{
				$db= new PDO('mysql:host=localhost; dbname=sesame', 'root','');
					echo 'OK';
				$res=$db->query("SELECT nom, prenom, mail FROM candidat");
				while ($ligne= $res->fetch(PDO::FETCH_ASSOC)){
				$unCandidat= new candidat($ligne['nom'], $ligne['prenom'], $ligne['mail']);
					echo $unCandidat->getNom();
					echo $unCandidat->getPrenom();
					echo $unCandidat->getMail();

				}
			
			catch (PDOException  $e){
				echo $e->getMessage();
			}
	
?>
