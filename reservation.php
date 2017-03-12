<!DOCTYPE html>
<html>

<title>
	BELOUD GESTION
</title>

<head>
	  <meta charset="utf-8" />
	  
	  <link rel="stylesheet" href="style.css" />



</head>
<body bgcolor="#2E2E2E">


<?php 
session_start();
if (isset($_SESSION['ID']) AND isset($_SESSION['pseudo']))
{
    echo 'Bonjour ' . $_SESSION['pseudo'];
}
?>

</body>

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

<p class = "formulaire" style="text-align: center;">
<form action="ciblereservation.php" method="post">
<p>
   Pseudo       :<input type="text" name="pseudo" /></br></br>
</p>
 <p>Mot de passe :
            <input type="password" name="pass" /></br></br>


         
            </p>
 
<input type="submit" value="Valider" />
</form>
</p>


</body>

</html>