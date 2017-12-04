<?php
    require_once ($_SERVER['DOCUMENT_ROOT']."/Model/BO/VehicleBO.php");

    $vehicleBO = new VehicleBO();
    $consult = $vehicleBO->listStatus();

    echo "<select name='status'>";
    while ($status = $consult->fetch(PDO::FETCH_OBJ))
    {
        echo "<option value='" . $status->id_status . "'>" . $status->nome_status . "</option>";
    }
    echo "</select>";
?>