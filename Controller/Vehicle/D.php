<?php
    require_once ($_SERVER['DOCUMENT_ROOT']."/Model/BO/VehicleBO.php");    
  
    $vehicleBO = new VehicleBO();

    if(!empty($_POST['id']))
    {
        $vehicleBO->deleteVehicle($_POST['id']);        
    }
    else
    {
        echo "Não é possível remover sem a placa.";
    }
    echo "<br><a href=\"javascript:history.go(-1)\">Voltar</a>";
?>