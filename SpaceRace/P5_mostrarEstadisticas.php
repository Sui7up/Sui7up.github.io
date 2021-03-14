<?php

    //CONECTO CON LA BBDD 
    $con=mysqli_connect("localhost","root","","practicacarreras");
    // Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    //TABLA GANADORES   
    $queryCarreras = mysqli_query($con,"SELECT * FROM carreras");
    echo " <div class='hueco'>GANADORES</div>";
    echo "<table border='1'><tr><th>ID</th><th>GANADOR</th><th>CANTIDAD GANADA</th><th>CANTIDAD APOSTADA</th><th>NAVE</th></tr>";
    while($row = mysqli_fetch_array($queryCarreras))
    {
    echo "<tr>";
    echo "<td>" . $row['id_carrera'] . "</td>";
    echo "<td>" . $row['ganador'] . "</td>";
    echo "<td>" . $row['cantidadGanada'] . "</td>";
    echo "<td>" . $row['cantidadApostada'] . "</td>";
    echo "<td>" . $row['nave'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";

    echo "<br><br>";

    //TABLA USUARIOS
    $queryUsuarios = mysqli_query($con,"SELECT * FROM usuarios");
    echo " <div class='hueco'>USUARIOS</div>";
    echo "<table border='1'><tr><th>USUARIO</th><th>TOTAL GANADO</th><th>TOTAL APOSTADO</th></tr>";
    while($row = mysqli_fetch_array($queryUsuarios))
    {
    echo "<tr>";
    echo "<td>" . $row['usuario'] . "</td>";
    echo "<td>" . $row['totalGanado'] . "</td>";
    echo "<td>" . $row['totalApostado'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";

    //CIERRO LA CONEXION
    mysqli_close($con);  
?>