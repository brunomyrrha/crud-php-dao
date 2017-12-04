<?php
    require_once ($_SERVER['DOCUMENT_ROOT']."/Model/BO/VehicleBO.php");

    $vehicleBO = new VehicleBO();

    $consult = $vehicleBO->listVehicles();
    if($consult->rowCount() == 0)
    {
        echo "Não há veículos na base.";
    }
    else
    {
        echo "<h3>Veículos</h3>";
        while ($vehicle = $consult->fetch(PDO::FETCH_OBJ))
        {
            echo "Placa: ".$vehicle->id_placa."<br>";
            echo "Nome: ".$vehicle->nome_veiculo."<br>";
            echo "Tipo: ".$vehicle->nome_tipo."<br>";
            echo "Fabricante: ".$vehicle->nome_fabricante."<br>";
            echo "Ano: ".$vehicle->ano."<br>";
            echo "Status: ".$vehicle->nome_status."<br>";
            echo "<br>";
        }
    }
    echo "<br><a href=\"javascript:history.go(-1)\">Voltar</a>";
?>