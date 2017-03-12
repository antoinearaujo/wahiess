
<!DOCTYPE html>
<html>

<title>
  ANTPIT'ZERRIA
</title>

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
$reponse = $bdd->query('SELECT refModele,refTaille, refType FROM StockTotal WHERE refModele,refTaille, refType != SELECT refModele,refTaille, refType FROM Commande ');
?>
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