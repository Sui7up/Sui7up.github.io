<?php

    //CONECTO CON LA BBDD 
    $con=mysqli_connect("localhost","root","","practicafotos");
    // Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $ArrayFavoritos = mysqli_query($con,"SELECT * FROM favoritas");
    $x=0;
    while($row = mysqli_fetch_array($ArrayFavoritos))
    {
        echo"<div class='fav' id='Oculto".$x."'>".$row['id']."</div>";
        echo"<div class='fav2' id='Oculto".$x."'>".$row['ruta']."</div>";
        echo"<div class='fav3' id='Oculto".$x."'>".$row['titulo']."</div>";
        $x++;
    }
  
    mysqli_close($con); 
?>


