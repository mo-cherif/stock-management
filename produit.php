<?php 
    class Produits {
        private $reference;
        private $designation;
        private $prix;
        private $quantite_stock;
    

        public function __construct() {

        }

        public function getReference() {
            return $this->reference;
        }

        public function setReference($ref) {
            $this->reference = $ref;
        }

        public function getDesignation() {
            return $this->designation;
        }

        public function setDesignation($des) {
            $this->designation = $des;
        }

        public function getPrix() {
            return $this->prix;
        }

        public function setPrix($prix) {
            $this->prix = $prix;
        }

        public function getQuantiteStock() {
            return $this->quantite_stock;
        }

        public function setQuantiteStock($quantite_stock) {
            $this->quantite_stock = $quantite_stock;
        }

        public function create() {

        }

        public function readOne() {

        }
        public function read() {

        }


        public function update() {

        }

        public function delete() {
            
        }


    }

?>