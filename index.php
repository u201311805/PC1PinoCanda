<!DOCTYPE html>
 <html>
 <body>
 <div align=center>
  	<img align="center" src='images/arriba.png' width="1300" height="200">
 </div>
  <div name="middle" align="center">
  <table align="center">
  	<th colspan="2"> For data scientists </th>
	<th colspan="2"> For IT professionals </th>
   <?php
  $servername = "us-cdbr-iron-east-03.cleardb.net";
  $username = "b74ba3320e82ec";
  $password = "2d194843";
  $dbname = "ad_bb6ddb2f34daf52";
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT * from servicios";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {?>
      <tr>
      <td> <img src='<?php echo $row['imagen_servicio']?>'> </td>
      <td><?php echo $row['nombre_servicio']?> <BR> <BR> <?php echo $row['descripcion_servicio']?></td>
      <?php $row=$result->fetch_assoc() ?>
      <td> <img src='<?php echo $row['imagen_servicio']?>'> </td>
      <td><?php echo $row['nombre_servicio']?> <BR> <BR> <?php echo $row['descripcion_servicio']?></td>
      </tr>
     <?php }
  } else {
      echo "0 results";
  }
  $conn->close();
 ?> 
 </table>
 </div>
 <div align=center>
  	<img align="center" src='images/abajo.png' width="1200" height="300">
 </div>
 </body>
 </html>
