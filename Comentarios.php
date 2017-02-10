<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/icon?family=Material+Icons">
	<title>COMENTARIOS</title>
</head>
<body>

 
<div class="row ">
<div class="col s1"></div>
<div class="col s10">
<h4 class="card-panel teal lighten-2 center-align white-text">COMENTARIOS</h4>

 <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Nombre" id="name" type="text" class="validate">
          <label for="name">Registro</label>
        </div>
        <div class="input-field col s6">
          <input id="apellido" type="text" class="validate">
          <label for="apellido">Apellido</label>
        </div>
      </div>
      
     
      <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">language</i>
          <input id="icon_prefix" type="email" class="validate">
          <label for="icon_prefix">Email</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="number" class="validate">
          <label for="icon_telephone">Telefono</label>
        </div>
      </div>
    </form>
  </div>

  <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">mode_edit</i>
          <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
          <label for="icon_prefix2">Comentarios</label>
        </div>
        
 <div class="fixed-action-btn horizontal">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
      <li><a class="btn-floating red" href="index.php"><i class="material-icons">toc</i></a></li>
      <li><a class="btn-floating yellow darken-1" href="Ingredientes.php"><i class="material-icons">view_list</i></a></li>
      <li><a class="btn-floating green" href="Pasos.php"><i class="material-icons">comment</i></a></li>
      <li><a class="btn-floating blue" href="Consejos.php"><i class="material-icons">chat</i></a></li>
      <li><a class="btn-floating blue" href="Comentarios.php"><i class="material-icons">question_answer</i></a></li>
    </ul>
  </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="materialize/js/materialize.min.js"></script></body>
</body>
</html>