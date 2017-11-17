<?php 




try
{
$bdd = new PDO('mysql:host=localhost;dbname=exercisesql', 'root', 'root');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
die('Erreur :' . $e->getMessage( ) );
}

$reponse1 = $bdd->query('SELECT * FROM clients');
$reponse2 = $bdd->query('SELECT * FROM showTypes');
$reponse3 = $bdd->query('SELECT * FROM clients LIMIT 0,20');
$reponse4 = $bdd->query('SELECT * FROM clients WHERE card=1');
$reponse5 = $bdd->query('SELECT * FROM clients WHERE lastName LIKE \'M%\' ORDER BY lastName');
$reponse6 = $bdd->query('SELECT * FROM shows ORDER BY title');



?>
 
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>PHPMysql</title>
		
        
	</head>	
 

	<body>


<section>
<h2>Exercice1</h2>

<?php 

while ($donnees = $reponse1->fetch())

{

echo '<p>' . $donnees['lastName'] . " " . $donnees['firstName'] . '</p>';
}
?>
</section>
<hr>

<section>
<h2>Exercice2</h2>
<?php


while ($donnees = $reponse2->fetch())

{
echo '<p>' . $donnees['type'] . '</p>';
}


?>

</section>
<section>
<h2>Exercice3</h2>
<?php


while ($donnees = $reponse3->fetch())

{
echo '<p>' . $donnees['lastName'] . " " . $donnees['firstName'] . '</p>';
}


?>

</section>


<section>
<h2>Exercice4</h2>
<?php


while ($donnees = $reponse4->fetch())

{
echo '<p>' . $donnees['lastName'] . " " . $donnees['firstName'] . '</p>';
}

?>

</section>



<section>
<h2>Exercice5</h2>
<?php


while ($donnees = $reponse5->fetch())

{

echo 
'<ul>
    <li> Nom : ' .$donnees['lastName'] . '</li>
     <li> Prénom: ' .$donnees['firstName'] . '</li>
</ul>'
;
}

?>

</section>

<section>
<h2>Exercice6</h2>
<?php


while ($donnees = $reponse6->fetch())

{
echo '<p> Spectacle:'. $donnees['title'] . ' par: '. $donnees['performer'] . 'le: '. $donnees['date'] . ' à: '. $donnees['startTime'] .'</p>';
}


?>

</section>






        
</body>
</html>
    