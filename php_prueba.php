<?php
    $id= $_GET['id'];
    $mysqli = new mysqli("localhost","root", "", "prueba");

    $query = $mysqli->query("select * from juegos where id = ".$id);
    $a=mysqli_fetch_array($query);
    
  /*while ($fila=mysqli_fetch_array($query)) {
      echo $fila['id'];
      echo $fila['color'];
      echo $fila['nombre'];
      echo $fila['edad'];
  }*/
   ?>

   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>VideoJuegosHD</title>
   </head>
   <body>
       <h1>Juegos</h1>
       <table>
            <thead>
                <tr>
                    <td> Nombre</td>
                    <td>Clasificaci&oacute;n</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $a['nombre']; ?></td>
                    <td><?php echo $a['clasificacion']; ?></td>
                </tr>
            </tbody>
       </table>

   </body>
   </html>