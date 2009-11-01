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
		<center>
		<table width="95%" border="1" cellspacing="2" cellpadding="0">
			<tr>
				<td>Name</td>
				<td>Middle</td>
				<td>First Name</td>
				<td>Email</td>
				<td>Postal Address</td>
				<td>Phone Number</td>
				<td>Website</td>
				<td>Birthdate</td>
				<td>Status</td>
			</tr>
			<?php
				$link = mysql_connect("localhost", "wwnc", "c0nf1r1nc1");
				mysql_select_db("worldwide_newton_asso_eu_org"); 
				
				$result = mysql_query("select * from annuaire order by statut");
				if ($result != 0) {
					echo '<!--'.mysql_error($link).'-->';
				}


				while ($row = mysql_fetch_object($result)) {
				
				echo '<!-- id: '.$row->id.'-->';
				echo '<tr>';
				echo '<td>' ; echo $row->nom ; echo '</td>' ;
				echo '<td>' ; echo $row->initiale ; echo '</td>' ;
				echo '<td>' ; echo $row->prenom ; echo '</td>' ;
				echo '<td>' ; echo $row->courriel ; echo '</td>' ;
				echo '<td>' ; echo $row->adresse ; echo '</td>' ;
				echo '<td>' ; echo $row->telephone ; echo '</td>' ;
				echo '<td>' ; echo $row->url ; echo '</td>' ;
				echo '<td>' ; echo $row->naissance_annee ; echo '-' ; echo $row->naissance_mois ; echo '-' ; echo $row->naissance_jour ; echo '</td>';
				// statut enum('honneur', 'bienfaiteur', 'adherent', 'finance', 'partenaire', 'partenaire_bienfaiteur') not null
				if(strcmp($row->statut,'honneur') == 0) {
					echo '<td>Honorary member</td>';
				} else if (strcmp($row->statut,'adherent') == 0) {
					echo '<td>Regular</td>';
				} else if (strcmp($row->statut,'bienfaiteur') == 0) {
					echo '<td>Contributor</td>';
				} else if (strcmp($row->statut,'finance') == 0) {
					echo '<td>Scholarship</td>';
				} else if (strcmp($row->statut,'partenaire') == 0) {
					echo '<td>Company</td>';
				} else if (strcmp($row->statut,'partenaire_bienfaiteur') == 0) {
					echo '<td>Company benefactor</td>';
				} else {
					echo '<td></td>';
				}
				echo '</tr>
				';
				}
			?>
		</table>
		</center>
		<hr>
<p align="right"><font size="-3">All the contents of the website are subject to change without notice to be updated to more accurate 
info. Please contact us if you have any further question.</font></p>
</body>
</html>
