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


        <?php
            
            while ($donnees = $reponse1->fetch()){
            ?>
        <p>Nom : <?php echo  $donnees['lastName']?> - Prénom : <?php echo  $donnees['firstName']?></p>
        <p>Date de naissance : <?php echo  $donnees['birthDate']?></p>
        <p>Carte de fidélité : <?php 

                if (isset($donnees['cardNumber'])) {
                    echo "Oui";    
                } else{  
                    echo "Non";
                }
                
                ?>
            </p>
        

        <p> <?php 

                if (isset($donnees['cardNumber'])) {
                    echo "N° de carte : " . $donnees['cardNumber'];    
                }else{  
                    echo " ";
                }
                
                ?>

            </p>
            <hr>
          <?php 
            }
         ?>




        
</body>
</html>
    