<?php include("conexion.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $query = "SELECT  * FROM articulos WHERE codigo = $id";
    $resultado = mysqli_query($conexion, $query);

    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_array($resultado);
        $cod = $row['codigo'];
        $art = $row['nombre'];
        $cod_cat = $row['categoria'];
        $pre = $row['precio'];
    }
}

if (isset($_POST['update'])) {
    $cod = $_GET['id'];
    $art = asegurar($_POST['nombre']);
    $cod_cat = $_POST['categoria'];
    $pre = $_POST['precio'];
    
    $query = "UPDATE articulos set nombre = '$art', categoria = '$cod_cat', precio = '$pre' WHERE codigo = $cod";
    mysqli_query($conexion, $query);
    $_SESSION['message'] = 'Item actualizado';
    $_SESSION['message_color'] = 'warning';
    header("Location: ../index.php");
}
?>

<?php include("../includes/header.php"); ?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <form-group>
                        <label for="1">Artículo</label>
                        <input type="text" id="1" name="nombre" value="<?php echo $art; ?>" class="form-control mb-2" placeholder="Actualizar artículo">
                    </form-group>
                    <form-group>
                        <label for="2">Código</label>
                        <input type="text" id="2" name="categoria" value="<?php echo $cod_cat; ?>" class="form-control mb-2" placeholder="Actualizar categoria">
                    </form-group>
                    <form-group>
                        <label for="3">Precio</label>
                        <input type="text" id="3" name="precio" value="<?php echo $pre; ?>" class="form-control mb-2" placeholder="Actualizar precio">
                    </form-group>

                    <button class="btn btn-info btn-block mt-1" name="update">Actualizar </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('../includes/footer.php'); ?>