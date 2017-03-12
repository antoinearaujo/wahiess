<!DOCTYPE html>
<html>

<title>
	ANTPIT'ZERRIA
</title>

<head>
	  <meta charset="utf-8" />
	  
	  <link rel="stylesheet" href="style.css" />

</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>

<head>









         
        
<?php



$pass=$_POST["pass"];
$refType=$_POST["refType"];
$refTaille=$_POST["refTaille"];
$refModele=$_POST["refModele"];







try
{
    $bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', 'simone');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


$bdd->exec('INSERT INTO Reservation( refModele,refType,refTaille )VALUES("'.$refModele. '","'.$refType. '","'.$refTaille. '") ');

echo 'La réservation a bien été enregistrée!';

?>

</head>



<body bgcolor="#08298A">


      <meta charset="utf-8" />
      <link rel="stylesheet" href="style.css" />







</body>

</html>