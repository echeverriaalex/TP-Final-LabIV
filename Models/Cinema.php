<?php
    namespace Models;

    class Cinema{

        private $name;
        private $capacity;

        public function __construct($name = '', $capacity = ''){

            $this->setName($name);
            $this->setCapacity($capacity);
        }

        public function setName($name){$this->name = $name;}
        public function getName(){return $this->name;}

        public function setCapacity($capacity){$this->capacity = $capacity;}
        public function getCapacity(){return $this->capacity;}
    }
?>