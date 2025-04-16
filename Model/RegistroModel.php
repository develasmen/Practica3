<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . "/Practica3/Model/BaseDatosModel.php";

    function RegistrarAbonoModel($id_Compra, $monto, $fecha)
{
    try {
        $context = AbrirBaseDatos();
        $sentencia = "CALL SP_RegistrarAbono('$id_Compra','$monto','$fecha')";
        $resultado = $context->query($sentencia);
        CerrarBaseDatos($context);
        return $resultado;
    } catch (Exception $error) {
        return false;
    }
}

?>