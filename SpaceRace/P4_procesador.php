<?php
if($_POST){

  //DATOS RECIBIDOS
  $ArrayNaves = $_POST['naves'];
  $ArrayUsuarios = $_POST['usuarios'];
  $ArraysApuestas= $_POST['apuestas'];
  $ArrayGanador = $_POST['ganador'];

  //DATOA DE LA BD
  $nombreBD = "practicacarreras";
  $usuario = "root";
  $contrasena = ""; 
  $servidor = "localhost";
  $string = "mysql:dbname=$nombreBD; host=$servidor;";

  //CREO LA CONEXION Y ACTIVO EL DETECTOR DE ERRORES
  $conn = new PDO($string, $usuario, $contrasena);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //SI EL USUARIO NO EXISTE EN LA BD LO CREO Y SI EXISTE LO MODIFICO CON LOS DATOS ACTUALES
  for ($x=0;$x<sizeof($ArrayUsuarios);$x++){
    try {
      $queryNuevoUsuario= "INSERT INTO usuarios (usuario, totalGanado, totalApostado) VALUES ('$ArrayUsuarios[$x]',0, $ArraysApuestas[$x])";
      $conn->query($queryNuevoUsuario);
    }catch(Throwable $e){
      echo $e->getMessage();
      $queryAntiguoUsuario= "UPDATE usuarios SET totalApostado=totalApostado + $ArraysApuestas[$x]  WHERE usuario='$ArrayUsuarios[$x]'";
      $conn->query($queryAntiguoUsuario);
    }
  }

  //MODIFICO AL GANADOR
  $modGanador="UPDATE usuarios SET totalGanado=totalGanado + $ArrayGanador[3]  WHERE usuario='$ArrayGanador[0]'";
  $conn->query($modGanador);

  //AÑADO A LA CARRERA LOS DATOS
  $sqlCarrera = "INSERT INTO carreras (ganador, cantidadApostada, nave, cantidadGanada) VALUES ('$ArrayGanador[0]',$ArrayGanador[1], '$ArrayGanador[2]', $ArrayGanador[3])";
  $conn->query($sqlCarrera);

  //CIERRO LA CONEXION
  $conn =null;


}
?>