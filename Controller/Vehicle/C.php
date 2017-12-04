<?php
    require_once ($_SERVER['DOCUMENT_ROOT']."/Model/BO/VehicleBO.php");

    $vehicleBO = new VehicleBO();

    if ((!empty($_POST['id']))&&(!empty($_POST['name']))&&(!empty($_POST['model']))&&(!empty($_POST['year']))&&(!empty($_POST['status'])))
    {
        $vehicleBO->addVehicle($_POST['id'],$_POST['name'],$_POST['model'],$_POST['year'],$_POST['status']);
    }
    else
    {
        echo "Não é possível adicionar veículo com campos vazios.";
    }
    
    echo "<br><a href=\"javascript:history.go(-1)\">Voltar</a>";
?>