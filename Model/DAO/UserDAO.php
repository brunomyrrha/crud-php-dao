<?php
    class UserDAO
    {

        public function insert($con, $user)
        {
            $query = "INSERT INTO USUARIO(nome_usuario,senha_usuario) VALUES
                      ('". $user->getUsername() . "','" . $user->getPassword() . "');";
            $stmt = $con->prepare($query);
            return $stmt->execute();
        }

        public function update ($con, $user, $id)
        {
            $query = "UPDATE USUARIO SET 
                    nome_usuario='" . $user->getUsername() . "',
                    senha_usuario='" . $user->getPassword() . "'
                    WHERE id_usuario = '".$id."';";
            $stmt = $con->prepare($query);
            return $stmt->execute();
        }

        public function showAll($con)
        {
            $query = "SELECT * FROM USUARIO;";
            $rs = $con->query($query);
            return $rs;
        }

        public function locate($con, $id)
        {
            $query = "SELECT * FROM USUARIO WHERE id_usuario = '$id';";
            $rs = $con->query($query);
            return $rs;
        }

        public function login($con, $user)
        {
            $query = "SELECT * FROM USUARIO WHERE nome_usuario = '" . $user->getUsername() . "'
                      AND senha_usuario = '" . $user->getPassword() . "';";
            $rs = $con->query($query);
            return $rs;
        }

        public function delete($con, $id)
        {
            $query = "DELETE FROM USUARIO WHERE id_usuario = '$id';";
            $stmt = $con->prepare($query);
            return $stmt->execute();
        }
    }
?>