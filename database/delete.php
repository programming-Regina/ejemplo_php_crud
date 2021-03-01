<?php include("conexion.php"); 

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM articulos WHERE codigo = $id";
    $resultado = mysqli_query($conexion, $query);
    if (!$resultado) {
        die("Falló");
    }
    $_SESSION['message'] = 'Item eliminado';
    $_SESSION['message_color'] = 'danger';
    header("Location: ../index.php");   
}


?>

 