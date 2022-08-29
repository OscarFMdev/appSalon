<?php

function obtenerServicios(): array
{

    try {
        require 'database.php';

        $sql = "SELECT * FROM servicios";
        $consulta = mysqli_query($db, $sql);


        $i = 0;
        $servicios = [];
        while ($row = mysqli_fetch_assoc($consulta)) {

            // Para ver todos los servicios 
            //echo "<pre>";
            //     var_dump($row);
            // echo "</pre>";

             $servicios[$i]['id'] = $row['id'];
             $servicios[$i]['nombre'] = $row['nombre'];
             $servicios[$i]['precio'] = $row['precio'];
             $i++;
        }

        // echo "<pre>";
        //     var_dump($servicios);
        // echo "</pre>";
        return $servicios;
    } catch (\Throwable $th) {
        //throw $th;

        var_dump($th);
    }
}

obtenerServicios();