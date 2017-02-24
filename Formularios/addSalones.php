<!DOCTYPE html>
<html>
<head>
	<title>TIPOS DE SALONES</title>
	<link rel="stylesheet" type="text/css" href="../materialize/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/icon?family=Material+Icons"
	
	
</head>

<body>
	<div class="row">
		<div class="col s12 m1 l1"></div>
 			<div class="col s12 m10 l10">
 			<h4 class="card-panel teal lighten-2 center-align white-text">Salones de Clases</h4>
				
				<div class="input-field col s10">
                   <input id="salon_id" type="text" class="validate">
          		   <label for="salon_id">Tipo de salon de clases</label>

      		</div>

      		<a class="waves-effect waves-light btn" onclick="verSiHaySalon();">Agregar salón</a>
     </div>



<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../materialize/js/materialize.min.js"></script></body>

<script type="text/javascript">
		
	function verSiHaySalon () {

			var tipoSalon = $ ("#salon_id").val();

				if (tipoSalon == "") {
				Materialize.toast ("No ha agregado nada",4000);
					

				} else {
					enviarSalon();
				}


	}

	function enviarSalon () {

		Materialize.toast ("Guardado con éxito",4000);
	}
	

	</script>
</body>
</html>