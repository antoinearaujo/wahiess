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
    $bdd = new PDO('mysql:host=localhost;dbname=beloud;charset=utf8', 'root', 'simone');
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







    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    ?>
<p class = "formulaire">
    

<form action="ciblepageadmin.php" method="post">
<p> VENDRE :</p></br>
<p>Modèle   :<input type="text" name="modele" /></br></br></p>
 <p>Taille : </p>
 <select name="taille" id="taille" />
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        <option value="XXL">XXL</option>
                    </select>
 <p>Type :  </p>
  <select name="type" id="type" />
                        <option value="tshirt">T-Shirt</option>
                        <option value="sweat">Sweat</option>

                    </select>
  <p>Prix :</p>
    <select name="prix" id="prix" />
                        <option value="15">15</option>
                        <option value="30">30</option>

                    </select>
<input type="submit" value="Valider" />

</form>
</p>
<?php
    session_start();
    $_SESSION['ID'] = $resultat['ID'];
    $_SESSION['pseudo'] = $pseudo;
    echo 'Vous êtes connecté !';
}





?>





</head>



<body bgcolor="#08298A">


      <meta charset="utf-8" />
      <link rel="stylesheet" href="style.css" />







</body>

</html>