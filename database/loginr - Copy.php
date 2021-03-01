<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regina N. Molares - Ejercicio conexión a DB (PHP/MySQL)</title>
    <script src="scripts/my_script.js"></script>
    <script src="https://kit.fontawesome.com/f2652a0a74.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body class="bg-dark text-dark">
    <nav class="navbar navbar-secondary bg-light text-dark">
        <div class="container">
            <a href="index.php" class="navbar-brand text-dark">Ejercicio de conexión a Base de Datos</a>
            <span class="text-right text-white">
                <button type="button" class="btn bg-dark text-white" data-toggle="modal" data-target=".bd-example-modal-sm">
                    <i class="fas fa-question-circle"></i></button></span>
        </div>
    </nav>

    <?php
    if (isset($_POST['go'])) {
        $server = $_POST['server'];
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $db = $_POST['db1'];

        $conexion = mysqli_connect($server, $user, $pass, $db);

        if (mysqli_connect_errno()) {
            $msg = '<i class="fas fa-hand-paper"></i> Conexión denegada.';
            $color = 'danger';
        } else {
            $msg = '<i class="fas fa-door-open"></i> Conexión exitosa.';
            $color = 'success';
        }
    }
    ?>

    <div class="container w-25 mt-5 p-2 bg-info " style="border-radius:10px; border-style: solid; border-width:1px;">
        <div class="container bg-<?= $color ?> text-center p-2">
            <h3><?= $msg ?></h3>
            <a href="ejercicio_conectar.php" class="btn bg-dark text-light"> <i class="fas fa-arrow-alt-circle-left"></i> Volver</a>
        </div>



        <!-- Small modal -->
        <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content text-center text-white bg-dark pt-3">
                    <p class="text-dark p-2 bg-light"><i class="fas fa-database"></i></p>
                    <p>Ejercicio de conexión a DB (PHP)</p>
                    <p>(Nov-2020) Regina N. Molares</p>
                    <div class="modal-footer">
                        <button type="button" class="btn  btn-block bg-light text-dark" data-dismiss="modal"> Cerrar</button>

                    </div>
                </div>

            </div>
        </div>
        <!-- FIN Small modal -->

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>