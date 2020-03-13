<?php
class Conectar{
    public static function conexion(){
        $conexion=new mysqli("remotemysql.com", "EjceBhVd0B", "Pz00j4utJo", "EjceBhVd0B");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>
