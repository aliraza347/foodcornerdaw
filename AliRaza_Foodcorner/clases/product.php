<?php

    abstract class Product{
        protected $id;
        protected $name;
        protected $picture;
        protected $price;
        protected $quantity;

        abstract public static function calculatePrice($Plist);

        abstract public function  calculateSQ();


        public function __construct($id, $name, $picture, $price, $quantity){
            $this->id = $id;
            $this->name = $name;
            $this->picture = $picture;
            $this->price = $price;
            $this->quantity = $quantity;
        }

        

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of picture
         */ 
        public function getPicture()
        {
                return $this->picture;
        }

        /**
         * Set the value of picture
         *
         * @return  self
         */ 
        public function setPicture($picture)
        {
                $this->picture = $picture;

                return $this;
        }

        /**
         * Get the value of price
         */ 
        public function getPrice()
        {
                return number_format((float)$this->price, 2, '.', '');
        }

        /**
         * Set the value of price
         *
         * @return  self
         */ 
        public function setPrice($price)
        {
                $this->price = $price;

                return $this;
        }

        /**
         * Get the value of quantity
         */ 
        public function getQuantity()
        {
                return $this->quantity;
        }

        /**
         * Set the value of quantity
         *
         * @return  self
         */ 
        public function setQuantity($quantity)
        {
                $this->quantity = $quantity;

                return $this;
        }

        /**
         * Get the value of size
         */ 

        /**
         * Set the value of size
         *
         * @return  self
         */ 
    }

?>