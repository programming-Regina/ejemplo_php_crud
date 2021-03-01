<?php include("database/conexion.php"); ?>
<?php include("includes/header.php"); ?>
<?php include('includes/funciones.php'); ?>

<div class="container  p-4">
    <div class="row">
        <div class="col-md-4">
            <?php if (isset($_SESSION['message'])) {
            ?>

                <div class="alert alert-<?= $_SESSION['message_color']; ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message']; ?> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            <?php session_unset();
            } ?>

            <div class="card card-body bg-light">
                <h5 class="card-title text-center">Agregar artículo</h5>
                <form action="database/save.php" method="POST" class="needs-validation" novalidate>
                    <div class="form-group">
                        <input type="text" name="cod" class="form-control" placeholder="Código (auto)" disabled>
                    </div>
                    <div class="form-group">
                        <label for="art" class="col-form-label">
                            Artículo
                        </label>

                        <input type="text" name="artic" id="art" class="form-control" placeholder="Artículo" autofocus required>
                        <div class="valid-feedback">
                            Validado!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, ingrese el nombre del artículo.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="categ" class="col-form-label">
                            Categoría
                        </label>
                        <select name='categ' id="categ" class="form-control" required>
                            <option disabled>Categoría</option>
                            <?php

                            $query1 = "SELECT * FROM categoria";
                            $valores = mysqli_query($conexion, $query1);

                            while ($row = mysqli_fetch_array($valores)) {
                            ?>
                                <option value="<?php echo $row['categ_id']; ?>">

                                    <?php
                                    echo $row['categ_id'] . " - " . $row['categoria'];
                                    ?>
                                </option>
                            <?php } ?>
                            <option value="9999" disabled>Nueva Categoría</option>
                            <div class="invalid-feedback">
                                Por favor, seleccione una categoría.
                            </div>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="precio" class="col-form-label">
                            Precio
                        </label>
                        <input type="number" step=".01" id="precio" name="precio" class="form-control" placeholder="Precio $" min="1.00"  required>
                        <div class="valid-feedback">
                            Validado!
                        </div>
                        <div class="invalid-feedback">
                            Por favor, ingrese el precio.
                        </div>
                    </div>

                    <div class="form-group"><input type="submit" class="btn btn-success btn-block bg-dark text-white" name="agregar" id="submit" value="Guardar"></div>

                </form>
            </div>
        </div>

        <div class="col-md-8">
            <table class="table-bordered table-hover table-responsive-sm w-100">
                <thead class="bg-dark text-white text-center">
                    <tr>
                        <th>Artículo</th>
                        <th>Categoría</th>
                        <th>Precio</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody class="bg-light">
                    <?php
                    $query = "SELECT codigo, nombre, precio, categoria.categoria FROM articulos JOIN categoria ON articulos.categoria = categoria.categ_id ORDER BY nombre;";
                    $result_all = mysqli_query($conexion, $query);
                    while ($row = mysqli_fetch_array($result_all)) {
                    ?>
                        <tr>
                            <td class="align-middle pl-1 pr-1"><?php $nom = html_entity_decode($row['nombre']);
                                                                echo $nom; ?></td>
                            <td class="text-center align-middle pl-1 pr-1"><?php echo $row['categoria']; ?></td>
                            <td class="text-right align-middle pl-1 pr-1"><?php monetiza($row['precio']); ?></td>
                            <td class="text-center align-middle pl-1 pr-1">
                                <a class="btn btn-dark" href="database/edit.php?id=<?php echo $row['codigo']; ?>"><i class="fas fa-edit"></i></a>
                                <a class="btn btn-dark" href="database/delete.php?id=<?php echo $row['codigo']; ?>"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
</div>
<?php include("includes/footer.php");
#https://www.youtube.com/watch?v=pn2v9lPakHQ&ab_channel=Fazt
#Agregar filtros de visualización x categoría y nuevas categorías
?>