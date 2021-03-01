<!-- ZONA IRRELEVANTE 1/2 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regina N. Molares - Ejercicio conexión a DB (PHP/MySQL)</title>
    <script src="scripts/my_script.js"></script>
    <script src="https://kit.fontawesome.com/f2652a0a74.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="conectar.css">

</head>

<body class="bg-dark text-white">
    <div class="red">
        <nav class="navbar navbar-secondary bg-light text-dark">
            <a href="index.php" class="navbar-brand text-dark">Ejercicio de conexión a Base de Datos</a>
            <span class="text-right text-white">
                <button type="button" class="btn bg-dark text-white" data-toggle="modal" data-target=".bd-example-modal-sm">
                    <i class="fas fa-question-circle"></i></button></span>
        </nav>
    </div>

    <!-- FIN DE LA ZONA IRRELEVANTE 1/2 -->

    <?php
    error_reporting(0);

    class Conectar
    {
        public $host;
        public $user;
        public $pass;
        public $db;
        public $conn;

        public function __construct($a, $b, $c, $d)
        {
            $this->host = $a;
            $this->user = $b;
            $this->pass = $c;
            $this->db = $d;
        }

        public function conectar()
        {
            $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);

            if ($this->conn->connect_errno) {
                $msg = '<i class="fas fa-hand-paper"></i> Conexión denegada.';
                $color = 'danger';
            } else {
                $msg = '<i class="fas fa-door-open"></i> Conexión exitosa.';
                $color = 'success';
            }

            echo '<div class="container info-conn  mt-5 p-2 bg-info " style="border-radius:10px; border-style: solid; border-width:1px;">
                <div class="container bg-' . $color . ' text-center p-2">
                <h3>' . $msg . '</h3>
                <a href="ejercicio_conectar.php" class="btn bg-dark text-light"> <i class="fas fa-arrow-alt-circle-left"></i> Volver</a>
                </div>';
        }
    }

    # LINEAS DE PRUEBA --- POR QUÉ NO RECIBE LOS DATOS DEL FORM?
    // var_dump($_POST['host']);
    // echo '<br>Intentando conectar a '.$_POST['host'];
    // echo '<br>Usuario: '.$_POST['user'];
    // echo '<br>Intentando conectar a '. $_POST['pass'];
    // echo '<br>Intentando acceder a '.$_POST['db1'];
    # FIN LÍNEAS DE PRUEBA

    if (isset($_POST['go'])) {
        $a = $_POST['host'];
        $b = $_POST['user'];
        $c = $_POST['pass'];
        $d = $_POST['db1'];
    } elseif (is_null($_POST)) {
        echo 'ERROR DE FORMULARIO';
    }

    $nuevaConexion = new Conectar($a, $b, $c, $d);
    $nuevaConexion->conectar();

    ?>


    <!-- ULTIMA ZONA IRRELEVANTE 2/2 -->

    <div class="green">
        <p>Ejercicio de conexión a DB (PHP) - (Nov-2020) <a href="http://cursofullstackphp.foxit.com.ar/comision2014/Regina_Noemi_Molares/" target="_BLANK">Regina N. Molares</a></p>
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

<!-- FIN DE LA ULTIMA ZONA IRRELEVANTE  -->