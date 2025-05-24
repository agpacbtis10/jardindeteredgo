 </br>
 </br>
 <form method="get" action="formulario.php">
 Nombre: <input type="text" name="nombre"></br>
 Apellido: <input type="text" name="ape"></br>
 Correo: <input type="text" name="email"></br>
 Celular: <input type="text" name="cel"></br>

 </br>
 <input type="submit" value="enviar">
 </form>
 <?php
 $a=$_GET['nombre'];
 $b=$_GET['ape'];
 $c=$_GET['email'];
 $d=$_GET['cel'];
 ?>

