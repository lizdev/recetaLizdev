<!DOCTYPE html>
<html>
<head>
	<title>PROMEDIO DE CALIFICACIÓN</title>
</head>
<body>
<h1>PROMEDIO POR ALUMNO</h1>
<input type="number" id="semestre1_id" name="">
<label>1 semestre</label>
<br>
<br>
<input type="number" id="semestre2_id" name="">
<label>2 semestre</label>
<br>
<br>
<input type="number" id="semestre3_id" name="">
<label>3 semestre</label>
<br>
<br>
<input type="number" id="semestre4_id" name="">
<label>4 semestre</label>
<br>
<br>
<input type="number" id="semestre5_id" name="">
<label>5 semestre</label>
<br>
<br>
<input type="button" value="Calcular" name="" onclick="promedioAlumno();">
<br><br>
<label>PROMEDIO</label>
<input type="text" disabled="true" id="resultado_id" name="">


<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript">
	

function promedioAlumno() {
var semestre1 = parseFloat	( $("#semestre1_id").val());
var semestre2 = parseFloat ($("#semestre2_id").val());
var semestre3 = parseFloat ($("#semestre3_id").val());
var semestre4 = parseFloat ($("#semestre4_id").val());
var semestre5 = parseFloat ($("#semestre5_id").val());

var promedio;	
promedio = (semestre1+semestre2+semestre3+semestre4+semestre5)/5;
$("#resultado_id"). val (promedio.toFixed(2));


}



</script>


 


</body>
</html>