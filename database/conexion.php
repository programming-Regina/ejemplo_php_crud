<?php 

    session_start();

    // parametros: host, nombre de usuario de la BD, clave, base de datos
    $conexion = mysqli_connect("localhost", "root","","php_crud_mysql_test");
    # $conexion = mysqli_connect("localhost", "id15524276_user","4xDh*2X3|XY!P{!5","id15524276_php_crud_mysql_test");
    # kinesio.regina
   
/*     if (mysqli_connect_errno()){
        echo "Error de conexión";
    } else {
        echo "Se conectó correctamente";
    } */

    function asegurar($str_recibido)
{
    # ESCAPA (= agrega '\' antes de) LOS CARACTERES ', ", \ y de NULL
    $str_recibido = addslashes($str_recibido);
    # BORRA BACKASLASHES
    $str_recibido = stripslashes($str_recibido);
    # BORRA CARACTERES SOSPECHOSOS
    $str_recibido = str_replace("/", "", $str_recibido);
    $str_recibido = str_replace("'", "", $str_recibido);
    $str_recibido = str_replace(";", "", $str_recibido);
    $str_recibido = str_replace("<", "", $str_recibido);
    $str_recibido = str_replace(">", "", $str_recibido);
    $str_recibido = str_replace(':', "", $str_recibido);
    $str_recibido = str_replace('"', "", $str_recibido);
    return $str_recibido;
}


?>