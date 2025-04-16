<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/Practica3/View/layout.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/Practica3/Controller/RegistroController.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/Practica3/Controller/ConsultaController.php";

$datos = ConsultarConsultas();
?>

<!DOCTYPE html>
<html lang="en">
<?php PrintCss(); ?>

<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

    <?php PrintMenu(); ?>

    <section class="principal d-flex flex-column justify-content-center align-items-center" id="home">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto col-12">
                    <div class="hero-text mt-5 text-center">
                        <h1 class="text-white" data-aos="fade-up" data-aos-delay="500">Bienvenido al Almacén DAJAVA!</h1>

                        <div class="text-center">
                        <h1 class="mb-4" style="color: white; font-weight: bold;">Crear Abono</h1>
                        </div>

                        <?php
                        if (isset($_POST["Message"])) {
                            echo '<div class="alert alert-warning Mensajes">' . $_POST["Message"] . '</div>';
                        }
                        ?>

                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="Id_Compra" class="text-white" style="font-weight: bold;">Compra</label>
                                <select class="form-control" id="Id_Compra" name="txtId_Compra" required onchange="mostrarSaldo()">
                                    <option value="">Seleccione</option>
                                    <?php
                                    while ($row = mysqli_fetch_array($datos)) {
                                        echo "<option value='" . $row["Id_Compra"] . "' data-saldo='" . $row["Saldo"] . "'>" . $row["Descripcion"] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="txtSaldoAnterior" class="text-white" style="font-weight: bold;">Saldo Anterior</label>
                                <input type="text" class="form-control" id="txtSaldoAnterior" name="txtSaldoAnterior" readonly>
                            </div>

                            <div class="form-group">
                                <label for="txtMonto" class="text-white" style="font-weight: bold;">Monto a abonar</label>
                                <input type="text" class="form-control" id="txtMonto" name="txtMonto" required>
                            </div>

                            <div class="form-group">
                                <label for="txtFecha" class="text-white" style="font-weight: bold;">Fecha</label>
                                <input type="date" class="form-control" name="txtFecha" required>
                            </div>

                            <!-- Botón Consultar a la izquierda -->
                            <div class="d-flex justify-content-between">
                                <a href="/Practica3/View/Consulta/consulta.php" class="btn btn-primary" style="color: white; font-weight: bold;">
                                    Consultar
                                </a>
                                <input type="submit" class="btn btn-danger" value="Procesar" name="btnRegistrarAbono">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php PrintFooter(); ?>
    <?php PrintScript(); ?>

    <script>
        function mostrarSaldo() {
            var select = document.getElementById("Id_Compra");
            var saldoInput = document.getElementById("txtSaldoAnterior");
            var saldoSeleccionado = select.options[select.selectedIndex].getAttribute("data-saldo");

            saldoInput.value = saldoSeleccionado ? saldoSeleccionado : "";
        }
    </script>
</body>
</html>