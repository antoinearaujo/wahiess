
<!DOCTYPE html>
<html>

<title>
	ANTPIT'ZERRIA
</title>

<head>
	   <meta charset="utf-8" />
	  <link rel="stylesheet" href="style.css" />
<p class = "menu"><image id = "menu" src = "Images/antpitzerria.png"/></p>

<p class ="st"><img id ="st" src="Images/st.png" ></p>
<p>........><a href="teeest.php" class="myButton">Connexion</a>
<a href="pizzas.php" class="myButton">Pizzas</a>
<a href="contact.php" class="myButton">Contact</a>
<a href="avis.php" class="myButton">Livre d'or</a>
<a href="session.php" class="myButton">Inscription</a></p>
</head>

<body bgcolor="#2E2E2E">


</style>
<style>p{text-align:center;}</style>





<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=tests;charset=utf8', 'root', 'simone');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT refPizza,refTaille, prix FROM tarif ');
// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
	echo '<p><strong>' . htmlspecialchars($donnees['refPizza']) . '</strong> : ' . htmlspecialchars($donnees['refTaille']) .' : '. htmlspecialchars($donnees['prix']).'euros</p>';
}

$reponse->closeCursor();

?>















<?php 
session_start();
if (isset($_SESSION['ID']) AND isset($_SESSION['pseudo']))
{
    echo $_SESSION['pseudo'];
}
?>

</body>

</html>