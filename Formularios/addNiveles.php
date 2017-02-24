<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../materialize/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/icon?family=Material+Icons">
	

	<title>NIVELES ACADEMICOS</title>
</head>


<body>
<div class="row">
	<div class="col s12 m1 l1"></div>
 	<div class="col s12 m10 l10">
 	<h4 class="card-panel teal lighten-2 center-align white-text">Niveles academicos</h4>

 	<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s10">
          <input placeholder="Agrega el nivel" id="nivel_id" type="text" class="validate">
          <label for="nivel_id">Nivel académico</label>
        </div>

       <br> <br>
       
       <a class="waves-effect waves-light btn" onclick="verSiHayNivel();">Agregar nivel</a>


</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../materialize/js/materialize.min.js"></script></body>
	<script type="text/javascript">
		
	function verSiHayNivel () {

			var nivelAcademino = $ ("#nivel_id").val();

				if (nivelAcademino == "") {
				Materialize.toast ("No ha agregado nada",4000);
					

				} else {
					enviarNiveles();
				}


	}

	function enviarNiveles () {

		Materialize.toast ("Guardado con éxito",4000);
	}


	</script>
</body>
</html>