<?php
    class VehicleDAO
    {
        public function insert($con, $vehicle)
        {
            $query = "INSERT INTO VEICULO VALUES
            ('".$vehicle->getID()."','".$vehicle->getName()."',".$vehicle->getModel().",".$vehicle->getYear().",".$vehicle->getStatus().");";
            $stmt = $con->prepare($query);
            return $stmt->execute();
        }

        public function update($con, $vehicle)
        {
            $query = "UPDATE VEICULO SET
                    id_placa='".$vehicle->getID()."',
                    nome_veiculo='".$vehicle->getName()."',
                    id_modelo=".$vehicle->getModel().",
                    ano=".$vehicle->getYear().",
                    id_status=".$vehicle->getStatus().";";
            $stmt = $con->prepare($query);
            return $stmt->execute();
        }

        public function showAll($con)
        {
            $query = "SELECT VEICULO.id_placa, VEICULO.nome_veiculo,
                        TIPO.nome_tipo, FABRICANTE.nome_fabricante,
                        VEICULO.ano, STATUS.nome_status from veiculo,
                        tipo, modelo, fabricante, status
                        where veiculo.id_modelo = modelo.id_modelo
                        and modelo.id_tipo = tipo.id_tipo and
                        modelo.id_fabricante = fabricante.id_fabricante
                        and veiculo.id_status = status.id_status;";
            $rs = $con->query($query);
            return $rs;
        }

        public function locate($con, $id)
        {
            $query = "SELECT * FROM VEICULO WHERE id_placa = '$id'";
            $rs = $con->query($query);
            return $rs;
        }

        public function showModel($con)
        {
            $query = "SELECT modelo.id_modelo, tipo.nome_tipo, fabricante.nome_fabricante from modelo, tipo, fabricante where modelo.id_tipo = tipo.id_tipo and modelo.id_fabricante = fabricante.id_fabricante;";
            $rs = $con->query($query);
            return $rs;
        }

        public function showStatus($con)
        {
            $query = "SELECT * FROM status;";
            $rs = $con->query($query);
            return $rs;
        }

        public function delete($con, $id)
        {
            $query = "DELETE FROM VEICULO WHERE id_placa = '$id';";
            $stmt = $con->prepare($query);
            return $stmt->execute();
        }
    }
?>