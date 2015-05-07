<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/index.css">
        <title>FORMULAIRE</title>
    </head>
<body>
<div class="container-fluid corps">

	  	<div class="container">
	    	<div class="row">
	      		<div class="col-md-12">
	        		<h1>BRAVO</h1>
	      		</div>
	    	</div>
	  	</div>

	<div class="rep">
	  	<div class="container">
	    	<div class="row">
	      		<div class="col-md-12">
	        		Votre nom est <?php echo $_POST['nom']; ?> .
	      		</div>
	    	</div>
	  	</div>

	  	<div class="container">
	    	<div class="row">
	      		<div class="col-md-12">
	        		Votre prénom est <?php echo $_POST['prenom']; ?> .
	      		</div>
	    	</div>
	  	</div>

	  	<div class="container">
	    	<div class="row">
	      		<div class="col-md-12">
	        		Vous avez <?php echo $_POST['age']; ?> ans.
	      		</div>
	    	</div>
	  	</div>


	  	<div class="container">
	    	<div class="row">
	      		<div class="col-md-12">
	        		Votre ville est <?php echo $_POST['ville']; ?> .
	      		</div>
	    	</div>
	  	</div>

	  	<div class="container">
	    	<div class="row">
	      		<div class="col-md-12">
	        		En <?php echo $_POST['pays']; ?> .
	      		</div>
	    	</div>
	  	</div>
	</div>


	  	<div class="container">
	    	<div class="row">
	      		<div class="col-md-9">
	        	</div>
	      		<div class="col-md-3">
	      			<a href="/Formulaire_php"><button type="button" class="btn btn-default">Retour</button></a>
	        	</div>
	    	</div>
	  	</div>




<!--PIED DE PAGE-->
  <div id="footer">
    <div class="copy">
      <p>Copyright ©, Tout droit résèrvés ! ACHOURI Ilies 2015</p>
    </div>
  </div>
</div>
  <script src="bootstrap/jquery/jquery-1.11.2.min.js"></script> 
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>