<!DOCTYPE html>
<html>
<head>
	<title>KILOMETROS RECORRIDOS</title>
</head>
<body>

<h3>Kilometros recorridos por un automovil en un lapso de tiempo</h3>

<label>Kilometros por recorrer</label>
<input type="number" id="Kilometros_id" name="">
<br><br>
<label>Galones de gasolina</label>
<input type="number" id="galones_id" name="">
<br><br>
<input type="button" value="calcular" name="" onclick="kilometrosRecorridos();">
<br><br>
<input type="text" disabled="true" style="width: 500px" id="resultado_id" name="">

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript">
	
function kilometrosRecorridos (){
	var kilometrosRecorridos = parseFloat ($("#Kilometros_id").val());
	var galonesGasolina = parseFloat ($("#galones_id").val());

	var rendimiento;
	rendimiento = galonesGasolina * 50;


	
	
	var resultado;
		if (rendimiento>=kilometrosRecorridos) {
			
		var tiempo;
			tiempo = kilometrosRecorridos/180;
			tiempoHoras= tiempo*60;
			$("#resultado_id"). val("Si podrias viajar y te tardarias "+ tiempoHoras.toFixed(0) + " minutos");



	} else {

		$("#resultado_id"). val ("No tienes suficiente gasolina para llegar a tu destino");
	}



}



</script>

</body>
</html>