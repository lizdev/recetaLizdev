<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>


<body>
<h5>MAYORIA DE EDAD</h5>
<input type="number"   id="edad_id" name="">
<label for="edad">Edad</label>
<input type="button" value="Calcular" name="" onclick="mayoriaDeEdad();">
<br><br>
<input type="text" disabled="true" id="resultado_id" name="">


<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript">
	
function mayoriaDeEdad (){


var edad = $("#edad_id").val();
var resultado;
	if (edad>17){
resultado ="Ya estas en edad de merecer";
		
$("#resultado_id").val(resultado);

	} else {

		resultado = "sigue participando";
		$("#resultado_id").val(resultado);
		
	}

}

$(document).ready(function(){

	//mayoriaDeEdad(39);
});









</script>
</body>
</html>