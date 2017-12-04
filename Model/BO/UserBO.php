<?php
    require_once ( $_SERVER["DOCUMENT_ROOT"]."/Model/DAO/UserDAO.php");
    require_once ( $_SERVER["DOCUMENT_ROOT"]."/Class/User.php");
    require_once ( $_SERVER["DOCUMENT_ROOT"]."/Controller/Database.php");

    if(!isset($_SESSION))
    {
        session_start();
    }

    class UserBO
    {
        private $userDAO,
                $con;

        public function __construct()
        {
            $this->userDAO = new UserDAO();
            if(isset($_SESSION['database']))
            {
                $this->con = $_SESSION['database'];
            }
            else
            {
                $this->con = new Database();
                $_SESSION['database'] = $this->con;
            }
        }

        public function addUser($username,$password)
        {
            $con = $this->con->connect();
            $user = new User($username,$password);
            $this->userDAO->insert($con,$user);
            echo "Usuário adicionado.";
        }

        public function listUsers()
        {
            $con = $this->con->connect();
            return $this->userDAO->showAll($con);
        }

        public function deleteUser($id)
        {
            $con = $this->con->connect();
            $retrieveUser = $this->userDAO->locate($con,$id);
            if ($retrieveUser->rowCount() > 0)
            {
                $this->userDAO->delete($con,$id);
                echo "Usuário removido.";   
            }            
            else
            {
                echo "Usuário não localizado";
            }
        }

        public function checkLogin ($username,$password)
        {   
            $con = $this->con->connect();
            $user = new User($username,$password);
            $retrieveUser = $this->userDAO->login($con,$user);
            if ($retrieveUser->rowCount() > 0)
            {
                include($_SERVER["DOCUMENT_ROOT"]."/View/Control.html");
            }
            else
            {
                echo "Usuário ou senha inválidos.";
                echo "<br><a href=\"javascript:history.go(-1)\">Voltar</a>";
            }
        }

        public function updateUser($id,$username,$password)
        {
            $con = $this->con->connect();
            $user = new User($username,$password);              
            $retrieveUser = $this->userDAO->locate($con,$id);
            if($retrieveUser->rowCount() > 0)
            {
                $this->userDAO->update($con,$user,$id);
                echo "Usuário atualizado.";
            }
            else
            {
                echo "Usuário não localizado";
            }
        }
    }
?>