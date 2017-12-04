<?php
    class Brand
    {
        private $id,
                $brand;

        public function __construct($id_p,$brand_p)
        {
            $this->setID($id_p);
            $this->setBrand($brand_p);
        }                

        public function getID()
        {
            return $this->id;
        }

        public function getBrand()
        {
            return $this->brand;
        }

        public function setID($id_p)
        {
            $this->id = $id_p;
        }

        public function setBrand($brand_p)
        {
            $this->brand = $brand_p;
        }
    } 
?>