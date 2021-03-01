<?php

include("conexion.php");

if (isset($_POST['agregar'])) {
    $articulo = asegurar($_POST['artic']);
    $categoria = intval($_POST['categ']);
    $precio = doubleval($_POST['precio']);

    $query = "INSERT INTO articulos(nombre, categoria, precio) VALUES ('$articulo', '$categoria', '$precio')";
    $resultado = mysqli_query($conexion, $query);

    if (!$resultado) {
        die("Falló");
    }

    $_SESSION['message'] = 'Item guardado';
    $_SESSION['message_color'] = 'success';
    header("Location: ../index.php");
}
