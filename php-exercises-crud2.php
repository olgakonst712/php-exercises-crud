
        


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Formulaire</title>
</head>
<body>

 
<form method="post" action="action.php">
  
    <div>
        <label for="lastName">Nom :</label>
        <input type="text" id="lastName" name="lastName" />
    </div>
    <div>
        <label for="firstName">Prénom :</label>
        <input type="text" id="firstName" name="firstName" />
    </div>
    <div>
        <label for="birthDate">Date de naissance :</label>
        <input type="date" id="birthDate" name="birthDate" />
    </div>
    <p>
       Carte de fidélité :<br />
       <input type="radio" name="card" id="card" value="1" /> <label for="yes">Oui</label><br />
       <input type="radio" name="card" id="card" value="0" checked="checked" /> <label for="non">Non</label><br />
       
   </p>
    <div>
        <label for="cardNumber">Numero de carte :</label>
        <input type="text" id="cardNumber" name="cardNumber" />
    </div>


   
    <div>
         
        <input type="submit" value="Envoyer" />
    </div>
</form>






<br/>
</body>
</html>