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


try
{
    $bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', 'simone');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


$pass = $_POST['pass'];
$pseudo = $_POST['pseudo'];

// Vérification des identifiants
$req = $bdd->prepare('SELECT pseudo FROM Membre WHERE pseudo = :pseudo AND pass = :pass AND rang ="admin"');
$req->execute(array(
    'pseudo' => $pseudo,
    'pass' => $pass));

$resultat = $req->fetch();

if (!$resultat)
{




?>
<meta http-equiv="refresh" content="1; URL=index.php">

<?php
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    ?>

<meta http-equiv="refresh" content="1; URL=menu.php">

<?php
    session_start();
    $_SESSION['ID'] = $resultat['ID'];
    $_SESSION['pseudo'] = $pseudo;
    echo 'Vous êtes connecté !';
}





?>


</head>



<body bgcolor="#FFA07A">


      <meta charset="utf-8" />
      <link rel="stylesheet" href="style.css" />







</body>

</html>
































