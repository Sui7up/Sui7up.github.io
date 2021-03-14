<?php
if($_POST){
//DATOS QUE RECIBO
$ID= $_POST['id'];
$ruta= $_POST['ruta'];
$titulo=$_POST['titulo'];
if($titulo ==null){
  $titulo = "SIN TITULO";
}
$agregar= $_POST['accion'];
var_dump($agregar);
//DATOS DE LA BD
$nombreBD = "practicafotos";
$usuario = "root";
$contrasena = ""; 
$servidor = "localhost";
$string = "mysql:dbname=$nombreBD; host=$servidor;";

//CREO LA CONEXION Y ACTIVO EL DETECTOR DE ERRORES
$conn = new PDO($string, $usuario, $contrasena);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if($agregar=="true"){
        try {
            $queryAddFavorita= "INSERT INTO favoritas (id, ruta, titulo) VALUES ('$ID','$ruta', '$titulo')";
            $conn->query($queryAddFavorita);
          }catch(Throwable $e){
            echo $e->getMessage();
          }
    }
    if($agregar=="false"){
        try {
            $queryRemoveFavorita= "DELETE FROM favoritas WHERE id='$ID'";
            $conn->query($queryRemoveFavorita);
          }catch(Throwable $e){
            echo $e->getMessage();
          }
    }
    $conn=null;
    }


?>