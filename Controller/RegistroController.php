<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Practica3/Model/RegistroModel.php";

if (isset($_POST["btnRegistrarAbono"])) {
    $id_Compra = $_POST["txtId_Compra"];
    $monto = $_POST["txtMonto"];
    $fecha = $_POST["txtFecha"];

    $resultado = RegistrarAbonoModel($id_Compra, $monto, $fecha);

    if ($resultado == true) {
        header('location: ../../View/Consulta/consulta.php');
    } else {
        $_POST["Message"] = "Su información no fue registrada correctamente";
    }
}

?>