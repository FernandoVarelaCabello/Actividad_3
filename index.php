<?php

//var_dump($_SERVER);

//echo "<BR><BR>" . $_SERVER["REMOTE_ADDR"];
//echo "<BR><BR>" . $_SERVER["REQUEST_METHOD"];

switch ($_SERVER["REQUEST_METHOD"]) {
    
    case "GET":
        $nombre=$_GET['nombre'];
        $apellido=$_GET['apellido'];

        $registro=array(
       'nombre' => $nombre,
        'apellido' => $apellido
        );
        //$respuesta= $nombre ." ". $apellido;

        echo json_encode($registro);
        break;

    case "POST":
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];

        $registro=array(
            'nombre' => $nombre,
             'apellido' => $apellido
             );
             //$respuesta= $nombre ." ". $apellido;
     
             echo json_encode($registro);
        break;
}