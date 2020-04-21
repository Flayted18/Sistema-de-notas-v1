<?php 

function conexion()
{
    try{ $conexion=new PDO('mysql:host=localhost;dbname=login','root','');
        
    } catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
/*   

    hacer consultas

    $static=$conexion->prepare('select * from usuarios');
    $static->execute();
    $resultado=$static->fetchall(); */

}

conexion();
?>