<?php
    class User
    {
        private $id,
                $username,
                $password;

        public function __construct($username_p,$password_p)
        {
            $this->setUsername($username_p);
            $this->setPassword($password_p);
        }

        public function getUsername()
        {
            return $this->username;
        }

        public function getPassword()
        {
            return $this->password;
        }

        public function setUsername($username_p)
        {
            $this->username = $username_p;
        }

        public function setPassword($password_p)
        {
            $this->password = $password_p;
        }
    }
?>