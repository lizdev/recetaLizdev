<!DOCTYPE html>
<html>
<head>
	<title>ESTATUS DE COLEGIATURAS</title>
	<link rel="stylesheet" type="text/css" href="../materialize/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/icon?family=Material+Icons"
</head>

<body>
<div class="row">
		<div class="col s12 m1 l1"></div>
 			<div class="col s12 m10 l10">
 			<h4 class="card-panel teal lighten-2 center-align white-text">Estatus de colegiaturas</h4>
				
				<div class="input-field col s10">
                   <input id="statusColegiatura_id" type="text" class="validate">
          		   <label for="statusColegiatura_id">Estatus de colegiaturas</label>

      		</div>

      		<a class="waves-effect waves-light btn" onclick="verSiHayColegiatura();">Agregar</a>
     </div>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../materialize/js/materialize.min.js"></script></body>


<script type="text/javascript">
	
		function verSiHayColegiatura (){
				var statusColegiatura = $("#statusColegiatura_id").val ();

						if (statusColegiatura == ""){
							Materialize.toast ("No ha agregado nada",4000);

						} else {

							enviarStatusColegiatura ();
						}

		}

		function enviarStatusColegiatura (){

			Materialize.toast ("Guardado con éxito",4000);
		}

</script>

</body>
</html>