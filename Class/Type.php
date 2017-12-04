<?php
    class Type
    {
        private $id,
                $name;
        
        public function __construct($id_p, $name_p)
        {
            $this->setID($id_p);
            $this->setName($name_p);
        }

        public function getID()
        {
            return $this->id;
        }

        public function getName()
        {
            return $this->name;
        }

        public function setID($id_p)
        {
            $this->id = $id_p;
        }

        public function setName($name_p)
        {
            $this->name = $name_p;
        }
    }
?>