<?php

     include_once $_SERVER['DOCUMENT_ROOT']. "/Practica3/View/layout.php";
     include_once $_SERVER['DOCUMENT_ROOT']. "/Practica3/Controller/ConsultaController.php";

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
                        <div class="container-fluid">
                            <h5 class="text-white">Consulta de Compras</h5>
                            <table id="example" class="table">
                                <thead>
                                    <tr class="header-row, text-white">
                                        <th>#</th>
                                        <th>Precio</th>
                                        <th>Saldo</th>
                                        <th>Descripción</th>
                                        <th>Estado</th>
                                    </tr>
                                </thead>
                                <tbody class="text-white">
                                    <?php
                                        $datos = ConsultarConsultas();
                                            while($row = mysqli_fetch_array($datos)) {
                                                echo "<tr>";
                                                echo "<td>" . $row["Id_Compra"] . "</td>";
                                                echo "<td>" . $row["Precio"] . "</td>";
                                                echo "<td>" . $row["Saldo"] . "</td>";
                                                echo "<td>" . $row["Descripcion"] . "</td>";
                                                echo "<td>" . $row["Estado"] . "</td>";
                                                echo "</tr>";
                                            }
                                    ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php PrintFooter(); ?>
    <?php PrintScript(); ?>

</body>

</html>