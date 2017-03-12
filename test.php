<!DOCTYPE html>
<html>

<title>
BELOUD GESTION</title>

<head>
     <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />

</head>

<body bgcolor="#2E2E2E">



<style></style>





<?php
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', 'simone');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT refType FROM StockTotal WHERE refType NOT IN (SELECT refType FROM Commande');
?>


<form class="form-container">
<h1 style="text-align: center;">STOCK DE DEPART</h1>
</form>
<form class="form-container">
<h1>
  <a href="ciblestock.php" class="myButton">Tout</a>
  <a href="ciblesweatS.php" class="myButton">Sweat</a>
  <a href="cibletshirtS.php" class="myButton">T-Shirt</a>
</h1>
<h1 style="text-align: center;">
<table>
   <tr>
       <th>Modele</th>
       <th>Taille</th>
       <th>Type</th>
   </tr>
   <?php 

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{

  echo '<tr><th>' . htmlspecialchars($donnees['refModele']) . '</th><th>' . htmlspecialchars($donnees['refTaille']) . '</th><th>' . htmlspecialchars($donnees['refType']). '</th></tr>' ;
}
?>
</table>
</h1>
  <a href="menu.php" class="myButton">Retourner au menu</a>

</form>
<?php
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