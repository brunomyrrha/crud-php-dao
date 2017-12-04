<?php
    class Model
    {
        private $id,
                $type,
                $brand;
        
        public function __construct($id_p, $type_p, $brand_p)
        {
            $this->setID($id_p);
            $this->setType($type_p);
            $this->setBrand($brand_p);
        }

        public function getID()
        {
            return $this->id;
        }

        public function getType()
        {
            return $this->type;
        }

        public function getBrand()
        {
            return $this->type;
        }

        public function setID($id_p)
        {
            $this->id = $id_p;
        }


        public function setType($type_p)
        {
            $this->type = $type_p;
        }

        public function setBrand($brand_p)
        {
            $this->brand = $brand_p;
        }
    }
?>