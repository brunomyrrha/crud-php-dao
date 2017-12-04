<?php
    require_once ( $_SERVER["DOCUMENT_ROOT"]."/Model/DAO/VehicleDAO.php");
    require_once ( $_SERVER["DOCUMENT_ROOT"]."/Class/Vehicle.php");
    require_once ( $_SERVER["DOCUMENT_ROOT"]."/Controller/Database.php");

    if(!isset($_SESSION))
    {
        session_start();
    }

    class  VehicleBO
    {
        private $vehicleDAO,
                $con;

        public function __construct()
        {
            $this->vehicleDAO = new VehicleDAO();
            if (isset($_SESSION['database']))
            {
                $this->con = $_SESSION['database'];
            }
            else
            {
                $this->con = new Database();
                $_SESSION['database'] = $this->con;
            }
        }

        public function listVehicles()
        {
            $con = $this->con->connect();
            return $this->vehicleDAO->showAll($con);
        }

        public function locate($id)
        {
            $con = $this->con->connect();
            return $this->vehicleDAO->locate($con,$id);
        }

        public function deleteVehicle($id)
        {
            $con = $this->con->connect();
            $retrieveUser = $this->vehicleDAO->locate($con,$id);
            if ($retrieveUser->rowCount() > 0)
            {
                $this->vehicleDAO->delete($con,$id);
                echo "Veículo removido.";
            }
            else
            {
                echo "Veículo não localizado.";
            }
        }

        public function addVehicle($id, $name, $model, $year, $status)
        {
            $con = $this->con->connect();
            $retrieveVehicle = $this->vehicleDAO->locate($con,$id);
            if ($retrieveVehicle->rowCount() == 0)
            {
                $vehicle = new Vehicle($id, $name, $model, $year, $status);
                $this->vehicleDAO->insert($con,$vehicle);
                echo "Veículo adicionado.";                
            }
            else
            {
                echo "Veículo já existe na base.";
            }
        }

        public function listStatus()
        {
            $con = $this->con->connect();
            return $this->vehicleDAO->showStatus($con);
        }

        public function listModel()
        {
            $con = $this->con->connect();
            return $this->vehicleDAO->showModel($con);
        }

        public function updateVehicle($id, $name, $model, $year, $status)
        {
            $con = $this->con->connect();
            $retrieveVehicle = $this->vehicleDAO->locate($con,$id);
            if ($retrieveVehicle->rowCount() == 0)
            {
                echo "Veículo não localizado.";                
            }
            else
            {
                $vehicle = new Vehicle($id, $name, $model, $year, $status);
                $this->vehicleDAO->update($con,$vehicle);
                echo "Veículo atualizado.";
            }
        }
    }
?>