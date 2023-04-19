<?php 
    include 'connexion.php';

    class Produits {
        private $reference;
        private $designation;
        private $prix;
        private $quantite_stock;
        private $cnx;

        public function __construct() {
            $connexionObj = new connexion();
            $this->cnx = $connexionObj->getConnexion();
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

        public function create($r, $d, $p, $q) {
            
            $insert = $this->cnx->prepare("INSERT INTO produits(reference, designation, prix,quantite_stock) VALUES (?,?,?,?)");
            $insert-> execute([$r, $d, $p, $q]);
        }

        public function readOne() {

        }
        public function read() {
           return $this->cnx->query('SELECT * FROM produits');
        }


        public function update() {

        }

        public function delete() {

        }


    }

?>