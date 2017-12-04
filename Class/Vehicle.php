<?php
    class Vehicle
    {
        private $id,
                $name,
                $model,
                $year,
                $status;

        public function __construct($id_p, $name_p, $model_p, $year_p, $status_p)
        {
            $this->setID($id_p);
            $this->setName($name_p);
            $this->setModel($model_p);
            $this->setYear($year_p);
            $this->setStatus($status_p);
        }

        public function getID()
        {
            return $this->id;
        }

        public function getName()
        {
            return $this->name;
        }

        public function getModel()
        {
            return $this->model;
        }

        public function getYear()
        {
            return $this->year;
        }

        public function getStatus()
        {
            return $this->status;
        }

        public function setID($id_p)
        {
            $this->id = $id_p;
        }

        public function setName($name_p)
        {
            $this->name = $name_p;
        }

        public function setModel($model_p)
        {
            $this->model = $model_p ;
        }

        public function setYear($year_p)
        {
            $this->year = $year_p;
        }

        public function setStatus($status_p)
        {
            $this->status = $status_p;
        }

    }
?>