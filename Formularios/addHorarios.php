<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../materialize/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/icon?family=Material+Icons">

	<title>HORARIOS DE CLASES</title>
</head>
<body>
	<div class="row">
	<div class="col s12 m1 l1"></div>
 	<div class="col s12 m10 l10">
 	<h4 class="card-panel teal lighten-2 center-align white-text">Horarios de clases</h4>

 			<div class="input-field col s10">
                   <input id="horarioClase_id" type="text" class="validate">
          		   <label for="horarioClase_id"> Horarios de clase</label>

      		</div>
      		<a class="waves-effect waves-light btn right" onclick="verSiHayHorario();">Agregar</a>
    	    </div>



</div>



<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../materialize/js/materialize.min.js"></script></body>


			<script type="text/javascript">
				
			function verSiHayHorario (){

				var tipoHorario = $ ("#horarioClase_id"). val();

				if (tipoHorario == ""){
				Materialize.toast ("No ha agregado nada",4000);

				} else {

					enviarTipoHorario ();
				}
			}

			function enviarTipoHorario (){

				Materialize.toast ("Agregado con éxito",4000);


			}

</script>

</body>
</html>