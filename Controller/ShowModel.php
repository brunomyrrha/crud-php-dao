<?php
    require_once ($_SERVER['DOCUMENT_ROOT']."/Model/BO/VehicleBO.php");

    $vehicleBO = new VehicleBO();
    $consult = $vehicleBO->listModel();

    echo "<select name='model'>";
    while ($status = $consult->fetch(PDO::FETCH_OBJ))
    {
        echo "<option value='" . $status->id_modelo. "'>" . $status->nome_tipo . " | " . $status->nome_fabricante . "</option>";
    }
    echo "</select>";
?>