
<!DOCTYPE html>
<html>

<title>
	BELOUD GESTION
</title>

<head>
	<meta charset="utf-8" />	  
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
</head>



<?php

session_start();


if (isset($_SESSION['pseudo']))
{

?>
<body bgcolor="#FFA07A">
<big>
<div class="container">
	<header class="row">
		<div class="col-lg-12">
			<article class="col-sm-10">
				<form class="form-container">
					<h1>MENU</h1>            
				</form>
            </article>
		</div>
    </header>
    <div class="row">
        <nav class="col-lg-12">
        	 <article class="col-sm-10">
        		<form class="form-container">
        			<a href="ciblevente.php" class="btn btn-block btn-warning">Vente</a>              
			 	</form>
			 </article>
        	 <article class="col-sm-10">
        		<form class="form-container">
        			<a href="ciblereservation.php" class="btn btn-block btn-warning">Réservation</a>              
			 	</form>
			 </article>
        	 <article class="col-sm-10">
        		<form class="form-container">
        			<a href="ciblevendus.php" class="btn btn-block btn-warning">Vendus</a>              
			 	</form>
			 </article>
        	 <article class="col-sm-10">
        		<form class="form-container">
        			<a href="ciblereserver.php" class="btn btn-block btn-warning">Réservés</a>              
			 	</form>
			 </article>
			 <article class="col-sm-10">
        		<form class="form-container">
        			<a href="ciblestock.php" class="btn btn-block btn-warning">Stock Départ</a>              
			 	</form>
			 </article>
		</nav>
</big>
</body>
</html>

<?php

}

?>











