<!DOCTYPE html> 
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Dulce Maria Olmedo Hernandez</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.cdnfonts.com/css/blood-crow" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/blood-crow" rel="stylesheet">
    
                    
    
</head>
<body>
<nav class="navbar navbar-light" style="background-color:rgb(0, 0, 0);">
   <div class="container">
    <a class="navbar-brand" href="index.html" style="color: white";>INICIO</a>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="nav navbar-nav">
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="unidad1.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">UNIDAD 1</a>
    <div class="dropdown-menu" aria-labelledby="navbarDropDownMenuLink">
    <a class="dropdown-item" href="/Demon/dulce01.php">Practica 1</a><br>
    <a class="dropdown-item" href="/Demon/dulce02.php">Practica 2</a><br> 
    <a class="dropdown-item" href="/Demon/dulce03.php">Practica 3</a><br>
    </div>
    </li>
    </ul>
    <ul class="nav navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="unidad1.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">UNIDAD 2</a>
<div class="dropdown-menu" aria-labelledby="navbarDropDownMenuLink">
<a class="dropdown-item" href="/Demon/dulce04.php">Practica 4</a><br>
<a class="dropdown-item" href="/Demon/dulce05a.php">Practica 5</a><br>
<a class="dropdown-item" href="/Demon/dulce6.html">Practica 6</a><br>
</li> </ul>
<ul class="nav navbar-nav">
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="unidad1.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">UNIDAD 3</a>
<div class="dropdown-menu" aria-labelledby="navbarDropDownMenuLink">
<a class="dropdown-item" href="/Demon/dulce07.html">Practica 7</a><br>
<a class="dropdown-item" href="/Demon/dulce8.html">Practica 8</a><br> 
<a class="dropdown-item" href="/Demon/final.html">Practica 9</a><br>
    </div>
</div>
</div>
</nav>
   
<div class="jumbotron">
  <h1 class="display-4" style="text-align: center; color: rgb(0, 0, 0);
  font-family: 'so this is it', blood-crow; text-shadow: 0 1 1 black;
  ">Mostrar Datos</h1>
  <?php
  $username = "root";
  $password = "";
  $servername = "localhost";
  $database = "Kimetsu_noyaiba";
  $conexion = new mysqli($servername, $username, $password, $database);
if($conexion->connect_error){
  die( "La conexion fallo: " . $conexion->connect_error);
}
$sql = "SELECT * FROM demonslayer";
$resultado = $conexion->query($sql);
?>
<div class="container">
<h2>Datos de la tabla Demon Slayer</h2>
<?php if ($resultado->num_rows >0): ?>
  <table style bgcolor="white" border="1" align="center" bordercolor="black" cellpadding="4" cellspacing="4">
      <tr>
          <th>ID</th>
          <th>Personaje</th>
          <th>Carcteristicas </th>
          <th>Rango</th>
          <th>Respiración</th>
          <th>Habilidades</th>
      </tr>
      <?php while ($fila = $resultado->fetch_assoc()): ?>
          <tr>
              <td><?php echo $fila['ID']; ?></td>
              <td><?php echo $fila['Personaje']; ?></td>
              <td><?php echo $fila['Caracteristicas']; ?></td>
              <td><?php echo $fila['Rango']; ?></td>
              <td><?php echo $fila['Respiración']; ?></td>
              <td><?php echo $fila['Habilidades']; ?></td>
          </tr>
      <?php endwhile; ?>
  </table>
<?php else: ?>
<p>No se encontraron los personajes</p>
<?php endif; ?>

</div>

</div>
</body>
</html>
