<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Regina Molares - Sistema CRUD PHP/MySQL</title>
  <script src="scripts/my_script.js"></script>
  <script src="https://kit.fontawesome.com/f2652a0a74.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body class="bg-info">
  <nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a href="index.php" class="navbar-brand">Sistema de Altas, bajas y modificaciones <small class="text-light">- Demo funcional </small></a>
      
      
    
      <span class="text-right text-white">
        <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-sm">
          <i class="fas fa-question-circle"></i></button></span>
    </div>
  </nav>

  <!-- Small modal -->
  <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
      <div class="modal-content text-center pt-3">
        <p class="bg-dark text-white p-2"><a href="database/restaurar.php"><i class="fas fa-database"></i></a></p>
        <p>Demo Sistema CRUD en PHP/MySQL</p>
        <p>(Nov-2020) Regina N. Molares</p>
        <div class="modal-footer">
          <button type="button" class="btn btn-info btn-block" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
  <!-- FIN Small modal -->