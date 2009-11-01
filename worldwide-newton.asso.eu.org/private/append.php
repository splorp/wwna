<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Worldwide Newton Association</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<h1 align="center">Worldwide Newton Association <br>
			<img src="../device.png" alt="" width="64" height="64" border="0"></h1>
		<hr>
		<p align="center">
			<?php
				$link = mysql_connect("localhost", "wwnc", "c0nf1r1nc1");
				mysql_select_db("worldwide_newton_asso_eu_org"); 
				
				/*
				create table annuaire (
					id int auto_increment primary key,
					nom varchar(255) not null,
					prenom varchar(255) not null,
					initiale varchar(255) null,
					courriel varchar(255) null,
					naissance_annee int null,
					naissance_mois int null,
					naissance_jour int null,
					adresse blob null,
					telephone varchar(255) null,
					url varchar(255) null,
					commentaires blob null,
					statut enum('honneur', 'bienfaiteur', 'adherent', 'finance', 'partenaire', 'partenaire_bienfaiteur') not null
					);
				*/
				
				$insert_query = "insert into annuaire ";
				$insert_query = $insert_query." SET nom='".$_POST['name']."' , ";
				$insert_query = $insert_query." prenom='".$_POST['first']."' , ";
				$insert_query = $insert_query." initiale='".$_POST['middle']."' , ";
				$insert_query = $insert_query." courriel='".$_POST['email']."' , ";
				$insert_query = $insert_query." naissance_annee='".$_POST['year']."' , ";
				$insert_query = $insert_query." naissance_mois='".$_POST['month']."' , ";
				$insert_query = $insert_query." naissance_jour='".$_POST['day']."' , ";
				$insert_query = $insert_query." adresse='".$_POST['postal']."' , ";
				$insert_query = $insert_query." telephone='".$_POST['phone']."' , ";
				$insert_query = $insert_query." url='".$_POST['web']."' , ";
				$insert_query = $insert_query." commentaires='".$_POST['comments']."' , ";
				$insert_query = $insert_query." statut='".$_POST['status']."'";
				echo '<!-- '.$insert_query.'-->';
				$result = mysql_query($insert_query);
				echo '<!--'.mysql_error($link).'-->';
			?>
			OK
			</p>
		<hr>
<p align="right"><font size="-3">All the contents of the website are subject to change without notice to be updated to more accurate 
info. Please contact us if you have any further question.</font></p>
</body>
</html>
