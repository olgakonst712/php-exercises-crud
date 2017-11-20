
<?php  
    
      $dbName = 'exercisesql' ; 
      $dbHost = 'localhost' ; 
      $dbUsername = 'root'; 
      $dbUserPassword = 'root'; 
     try
{
$bdd = new PDO('mysql:host=localhost;dbname=exercisesql', 'root', 'root');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
die('Erreur :' . $e->getMessage( ) );
}



if ($_POST['card']==false) {
	$cardNumber = null;
} else {
	$cardNumber = $_POST['cardNumber'];


};



$tab = array(
    ':lastName'		=> $_POST['lastName'],
    ':firstName'	=> $_POST['firstName'],
    ':birthDate'	=> $_POST['birthDate'],
    ':card'			=> $_POST['card'],
    ':cardNumber'	=> $cardNumber,


   
);
        



$sql = "INSERT INTO `clients` (`lastName`, `firstName`, `birthDate`, `cardNumber`, `card`) 
    VALUES (:lastName, :firstName, :birthDate, :cardNumber, :card)" ;




$req = $bdd->prepare($sql);

$result = $req->execute($tab);

if (!$result) {
    
    echo "Une erreur est survenue : " . $req->errorCode();

    
   
}



if ($bdd) {
    $bdd = NULL;
}


?>
     

<p> <a href="php-exercises-crud2.php">clique ici</a> pour revenir à la page formulaire.php.</p>

