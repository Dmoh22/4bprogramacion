<!DOCTYPE html>
   <html lang="en">
<head>
 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="witdh=device-with, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.cdnfonts.com/css/boverky" rel="stylesheet">

    <title>Dulce Maria Olmedo Hernandez</title>
                
</head>

        <body>
            <nav class="navbar navbar-light bg-light">
                <form class="form-inline">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <div class="container">
                <a class="navbar-brang" href="inde.html" style="color:white" ;>Inicio</a>
                </div>

              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav navbar-nav">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="unidad1.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    style="color: white;">UNIDAD 1</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="/dulce01.html">Practica 1</a><br>
                      <a class="dropdown-item" href="/dulce02.html">Practica 2</a><br>
                      <a class="dropdown-item" href="/dulce03.html">Practica 3</a>

                    </div>
                  </li>
                </ul>
                <ul class="nav navbar-nav">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="unidad1.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    style="color: white;">UNIDAD 1</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="/dulce04.html">Practica 4</a><br>
                      <a class="dropdown-item" href="/dulce05.html">Practica 5</a><br>
                      <a class="dropdown-item" href="/dulce06.html">Practica 6</a>

                    </div>
                  </li>
                </ul>
                <ul class="nav navbar-nav">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="unidad1.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    style="color: white;">UNIDAD 1</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="/dulce07.html">Practica 7</a><br>
                      <a class="dropdown-item" href="/dulce08.html">Practica 8</a><br>
                      <a class="dropdown-item" href="/dulce09.html">Practica 9</a><br>
                      <a class="dropdown-item" href="/dulce10.html">Practica Final</a>
                    </div>
                  </li>
                </ul>
              </div>





              </nav>
            <div class="jumbotron">
                <h1 class="display-4" style="text-align: center;
                color:coral;
                font-family:'so this is it', sans-serif; text-shadow: 0 1 1 black;">
                PAGINA MOSTRAR DATOS</h1>
                <?php
                $username="root";
                $password="";
                $servername = "localhost";
                $database= "Animacion";
                $conexion = new mysqli($username, $password, $servername, $database);
                if($conexion->connect_error){
                  die("La Conexion Fallo:" .$conexion->connect_error);

                }
                $sql = "SELECT * FROM  KDemon";
                $resultado = "";
                ?>
                <?php
                if($resultado->num_rows >0)?>{
                  <table>
                    <tr>
                      <th>id</th>
                      <th>Nombre Real</th>
                      <th>Nombre de Superheroes</th>
                      <th>Poderes</th>
                      <th>Debilidades</th>
                      <th>Bio</th>
                </tr>
                <?php while($fila = $resultado->fetch_assoc()); ?>
                <tr>
                  <td><?php echo $fila['id'];?></td>
                  <td><?php echo $fila['nombrereal'];?></td>
                  <td><?php echo $fila['id'];?></td>
                  <td><?php echo $fila['id'];?></td>
                  <td><?php echo $fila['id'];?></td>
                  <td><?php echo $fila['id'];?></td>
                  <td><?php echo $fila['id'];?></td>
                  <td><?php echo $fila['id'];?></td>

                </tr>
                </table>

                }

                
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <p class="lead">
                  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                </p>
              </div>


        </body>



       
       
