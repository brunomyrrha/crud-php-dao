<?php
    class Database
    {
        private $host,
                $database,
                $username,
                $password,
                $query,
                $conection;
        
        private function configDatabase()
        {
            $this->database = 'AUTOCAR';
            $this->host = 'localhost';
            $this->username = 'root';
            $this->password = '';
        }

        public function __construct()
        {
            try
            {
                $this->configDatabase();
                $this->connect();
                //echo "Conectado com sucesso.";
            }
            catch (PDOException $error)
            {
                echo "Erro ao conectar.";
                $this->get_error($error);
            }
        }

        public function __sleep()
        {
            return array ('database','host','username','password');
        }
        
        public function __wakeup()
        {
            $this->connect();
        }

        public function connect()
        {
            $query = "mysql:host=" . $this->host . ";dbname=" . $this->database;
            $this->connection = new PDO ($query, $this->username, $this->password);
            return $this->connection;
        }
    }
?>