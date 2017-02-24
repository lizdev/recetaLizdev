<!DOCTYPE html>
<html>
<head>
	<title>COLEGIATURAS</title>

	<link rel="stylesheet" type="text/css" href="../materialize/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/icon?family=Material+Icons"
</head>
<body>
<div class="row">
		<div class="col s12 m1 l1"></div>
 			<div class="col s12 m10 l10">
 			<h4 class="card-panel teal lighten-2 center-align white-text">Colegiaturas</h4>
				
				<div class="input-field col s12">
                   <input id="costoColegiatura_id" type="text" class="validate">
          		   <label for="costoColegiatura_id"> Costo colegiatura</label>
          		   <input type="date" id="fechaInicio_id" class="datepicker" placeholder="Fecha Inicio">
          		   <input type="date" id="fechaCorte_id" class="datepicker" placeholder="Fecha Corte">
      		</div>

      		<a class="waves-effect waves-light btn right" onclick="verSiHayColegiatura();">Agregar</a>
     </div>

     <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="../materialize/js/materialize.min.js"></script></body>

	<script type="text/javascript">
		$ (document).ready(function(){
//////////////////////////////////////////////////////////////////Este es el iniciador del date picker
			$('.datepicker').pickadate({
				    selectMonths: true, // Creates a dropdown to control month
				    selectYears: 15 // Creates a dropdown of 15 years to control year
				  });


			/////////////////////////////////////
		});

		function verSiHayColegiatura () {
			var costoColegiatura = $ ("#costoColegiatura_id").val();
			var fechaInicio = $ ("#fechaInicio_id").val();
			var fechaCorte = $ ("#fechaCorte_id").val();
				
			if (costoColegiatura == "" || fechaInicio == ""  || fechaCorte=="") {

				Materialize.toast ("No ha agregado nada",4000);
			} else {

				enviarColegiatura ();
			}

		}
		function enviarColegiatura (){

			Materialize.toast ("Guardado con éxito",4000);
		}


	</script>

  
</body>
</html>