<?php
    class Status
    {
        private $id,
                $status;
        
        public function _construct($id_p, $status_p)
        {
            $this->setID($id_p);
            $this->setStatus($status_p);
        }

        public function getID()
        {
            return $this->id;
        }

        public function getStatus()
        {
            return $this->status;
        }

        public function setID($id_p)
        {
            $this->id = $id_p;
        }

        public function setStatus($status_p)
        {
            $this->status = $status_p;
        }

    }
?>