<!DOCTYPE html>
<html>

<title>
	ANTPIT'ZERRIA
</title>

<head>
	  <meta charset="utf-8" />
	  
	  <link rel="stylesheet" href="style.css" />

</head>

<?php

session_start();
  if (isset($_SESSION['pseudo']))
  {
?>


<form class="form-container" action="ventebdd.php" method="post">
  <h1> VENDRE :</h1></br>
  <p>Taille :</p>

 <select name="refTaille" id="refTaille" />
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        <option value="XXL">XXL</option>
                    </select>
 <p>Type :  </p>
  <select name="refType" id="refType" />
                        <option value="T-Shirt">T-Shirt</option>
                        <option value="Sweat">Sweat</option>

                    </select>

 <p>Type :  </p>
  <select name="refModele" id="refModele" />
                        <option value="Graff">Graff</option>
                        <option value="Coeur">Coeur</option>
                        <option value="BeloudCasse">Beloud Cassé</option>

                    </select>

 
<input type="submit" value="Valider" /></br></br>
<a href="menu.php" class="myButton">Retourner au menu</a>

</form>
</p>



<?php
}
?>









<body bgcolor="#08298A">


      <meta charset="utf-8" />
      <link rel="stylesheet" href="style.css" />







</body>

</html>
