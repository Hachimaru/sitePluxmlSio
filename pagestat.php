<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Portes Ouvertes</title>
</head>
<body>

    <header>
        <h2>STATISTIQUE</h2>
    </header>
<!------------------------------------Connexion---------------------------------------------------------------------------------->

<?php 
$host="localhost";    //emplacement de la base  
$user="root";    //Nom d'utilisateur de windows  
$password="";    //MDP windows  
$database="porteo";    //Nom de la base de donnÃ©e  
//connexion--------------------------------------------------------------------------------------------  
@($GLOBALS["___mysqli_ston"] = mysqli_connect($host, $user, $password)) or die("Impossible de se connecter");  
//selection base de donnÃ©e------------------------------------------------------------------------------  
$db_selected = @((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . $database)) or die("Impossible de se connecter a la base de donn&eacute;e");  
?>

    
<!-- -------------------------------STATISTIQUE----------------------------------------------------------------------------------------------------------------------------------------->

			<?php 
                $req = "SELECT COUNT(*) AS nombre_de_visiteur FROM ELEVE"; 
                $query = mysqli_query($GLOBALS["___mysqli_ston"], $req); 
                $nb_visiteur = mysqli_fetch_array($query); 
                echo "Il y a eu ".$nb_visiteur['nombre_de_visiteur']." visiteurs."; 
            ?>
		
			<br />
			<br />
			
			<?php 
                $req1 = "SELECT COUNT(*) AS interesse FROM ELEVE WHERE futur != 'Aucune'"; 
                $query1 = mysqli_query($GLOBALS["___mysqli_ston"], $req1); 
                $nb_visiteur1 = mysqli_fetch_array($query1); 
                echo "<br>"."Il y a eu ".$nb_visiteur1['interesse']." visiteurs interesse par une section."; 
            ?>


			<br />
			<br />
			
			<?php 
                $req2 = "SELECT futur, COUNT(*) AS Visiteur_par_section FROM ELEVE GROUP BY futur"; 
                $query2 = mysqli_query($GLOBALS["___mysqli_ston"], $req2) or die; 
                echo "<table width=\"100%\" border=\"2\" align=\"center\" cellpadding=\"1\" cellspacing=\"2\">";
				echo "<td width=\"10%\"bgcolor=\"#9999CC\">".$tableau3[] = 'SECTION DU LYCEE'."</td> \n";
				echo "<td width=\"10%\"bgcolor=\"#9999CC\">".$tableau3[] = 'NOMBRE VISITEUR'."</td> \n";	

                while($tableau = mysqli_fetch_array($query2)) 
                { 
                    echo "<tr> \n";  
                    echo "<tr> \n";  
                    echo "<td width=\"10%\"bgcolor=\"#91A8F9\">".$tableau["futur"]."</td> \n";  
                    echo "<td width=\"10%\"bgcolor=\"#91A8F9\">".$tableau["Visiteur_par_section"]."</td> \n"; 
                } 
                echo "</table> \n"; 
            ?>
		
			<br />
			<br />
		
		
			<?php 
                $req3 = "SELECT section, COUNT(*) AS Section_visiteur FROM ELEVE GROUP BY section"; 
                $query3 = mysqli_query($GLOBALS["___mysqli_ston"], $req3) or die; 
                echo "<table width=\"100%\" border=\"2\" align=\"center\" cellpadding=\"1\" cellspacing=\"2\">";
				echo "<td width=\"10%\"bgcolor=\"#9999CC\">".$tableau3[] = 'SECTION ORIGINE'."</td> \n";
				echo "<td width=\"10%\"bgcolor=\"#9999CC\">".$tableau3[] = 'NOMBRE VISITEUR'."</td> \n";	
                while($tableau2 = mysqli_fetch_array($query3)) 
                { 
                    echo "<tr> \n";  
                    echo "<tr> \n";  
                    echo "<td width=\"10%\"bgcolor=\"#91A8F9\">".$tableau2["section"]."</td> \n";  
                    echo "<td width=\"10%\"bgcolor=\"#91A8F9\">".$tableau2["Section_visiteur"]."</td> \n"; 
                } 
                echo "</table> \n"; 
            ?>
			
			<br />
			<br />
			
			
			<?php 
                $req4 = "SELECT nom, prenom, mail, lycee, ville, section FROM ELEVE WHERE futur = 'BTS Services Informatiques aux Organisations'"; 
                $query4 = mysqli_query($GLOBALS["___mysqli_ston"], $req4) or die;
				echo "Les visiteurs interesses par la section BTS Services Informatiques aux Organisations :"; 
                echo "<table width=\"100%\" border=\"2\" align=\"center\" cellpadding=\"1\" cellspacing=\"2\">";
				echo "<td width=\"10%\"bgcolor=\"#9999CC\">".$tableau3[] = 'NOM'."</td> \n";
				echo "<td width=\"10%\"bgcolor=\"#9999CC\">".$tableau3[] = 'PRENOM'."</td> \n";
				echo "<td width=\"10%\"bgcolor=\"#9999CC\">".$tableau3[] = 'MAIL'."</td> \n";
				echo "<td width=\"10%\"bgcolor=\"#9999CC\">".$tableau3[] = 'LYCEE'."</td> \n";
				echo "<td width=\"10%\"bgcolor=\"#9999CC\">".$tableau3[] = 'VILLE'."</td> \n";
				echo "<td width=\"10%\"bgcolor=\"#9999CC\">".$tableau3[] = 'SECTION'."</td> \n";	
                while($tableau3 = mysqli_fetch_array($query4)) 
                { 
                    echo "<tr> \n";  
                    echo "<tr> \n";  
                    echo "<td width=\"10%\"bgcolor=\"#91A8F9\">".$tableau3["nom"]."</td> \n";
					echo "<td width=\"10%\"bgcolor=\"#91A8F9\">".$tableau3["prenom"]."</td> \n";
                    echo "<td width=\"10%\"bgcolor=\"#91A8F9\">".$tableau3["mail"]."</td> \n"; 
                    echo "<td width=\"10%\"bgcolor=\"#91A8F9\">".$tableau3["lycee"]."</td> \n";
					echo "<td width=\"10%\"bgcolor=\"#91A8F9\">".$tableau3["ville"]."</td> \n"; 
                    echo "<td width=\"10%\"bgcolor=\"#91A8F9\">".$tableau3["section"]."</td> \n";
                } 
                echo "</table> \n"; 
            ?>
			
			<br />
			<br />
			
			
			<?php 
                $req4 = "SELECT nom, prenom, mail, lycee, ville, section, futur FROM ELEVE"; 
                $query4 = mysqli_query($GLOBALS["___mysqli_ston"], $req4) or die; 
                echo "<table width=\"100%\" border=\"2\" align=\"center\" cellpadding=\"1\" cellspacing=\"2\">";
				echo "<td width=\"10%\"bgcolor=\"#9999CC\">".$tableau3[] = 'NOM'."</td> \n";
				echo "<td width=\"10%\"bgcolor=\"#9999CC\">".$tableau3[] = 'PRENOM'."</td> \n";
				echo "<td width=\"10%\"bgcolor=\"#9999CC\">".$tableau3[] = 'MAIL'."</td> \n";
				echo "<td width=\"10%\"bgcolor=\"#9999CC\">".$tableau3[] = 'LYCEE'."</td> \n";
				echo "<td width=\"10%\"bgcolor=\"#9999CC\">".$tableau3[] = 'VILLE'."</td> \n";
				echo "<td width=\"10%\"bgcolor=\"#9999CC\">".$tableau3[] = 'SECTION'."</td> \n";
				echo "<td width=\"10%\"bgcolor=\"#9999CC\">".$tableau3[] = 'SECTION DESIRE'."</td> \n";				
                while($tableau3 = mysqli_fetch_array($query4)) 
                { 
                    echo "<tr> \n";  
                    echo "<tr> \n";  
                    echo "<td width=\"10%\"bgcolor=\"#91A8F9\">".$tableau3["nom"]."</td> \n";
					echo "<td width=\"10%\"bgcolor=\"#91A8F9\">".$tableau3["prenom"]."</td> \n";
                    echo "<td width=\"10%\"bgcolor=\"#91A8F9\">".$tableau3["mail"]."</td> \n"; 
                    echo "<td width=\"10%\"bgcolor=\"#91A8F9\">".$tableau3["lycee"]."</td> \n";
					echo "<td width=\"10%\"bgcolor=\"#91A8F9\">".$tableau3["ville"]."</td> \n"; 
                    echo "<td width=\"10%\"bgcolor=\"#91A8F9\">".$tableau3["section"]."</td> \n";
					echo "<td width=\"10%\"bgcolor=\"#91A8F9\">".$tableau3["futur"]."</td> \n";

                } 
                echo "</table> \n"; 
            ?>            
<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
      
</body>
</html>