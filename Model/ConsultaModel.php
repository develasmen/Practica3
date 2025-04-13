<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Practica3/Model/BaseDatosModel.php";

function ConsultarConsultasModel()
{
    try
    {
        $context = AbrirBaseDatos();
        $sentencia = "CALL SP_ConsultarPrincipal()";
        $resultado = $context->query($sentencia);
        CerrarBaseDatos($context);
        return $resultado;
    }
    catch(Exception $error)
    {
        return null;
    }        
}
?>
