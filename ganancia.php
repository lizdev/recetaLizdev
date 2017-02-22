<!DOCTYPE html>
<html>
<head>
	<title>GANANCIA EN LA ELABORACIÓN DE UN PASTEL</title>
</head>
<body>

<h3>COSTOS DE UN PASTEL</h3>

<label>Costo de Materiales</label>
<input type="number" id="material_id" name="">
<br>
<br>
<label>Conto de mano de obra</label>
<input type="number" id="manoObra_id" name="">
<br>
<br>
<label>Costo de Venta</label>
<input type="number" id="venta_id" name="">
<br>
<br>
<input type="button" value="Calcular" name="" onclick="gananciaPastel();">
<br><br>
<input type="text" disabled="true" id="resultado_id" name="">


<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript">
	
function gananciaPastel (){
	var materiales = parseFloat ($("#material_id").val());
	var manoObra= parseFloat ($("#manoObra_id").val());
	var venta = parseFloat($("#venta_id").val());

	var ganancia;

	ganancia= venta - (materiales+manoObra);
	 
	$("#resultado_id").val(ganancia.toFixed(2));




}




</script>
</body>
</html>