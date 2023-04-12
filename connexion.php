<?php 

    class Connexion {
        public $localhost;
        public $servername;
        public $database;
        public $mdp;

        public function __construct() {
            $this->localhost = "localhost";
            $this->database = "stock";
            $this->username = "root";
            $this->mdp = "";
        }

        public function getConnexion() {
            try {
                return new PDO("mysql:host=$this->localhost;
                dbname=$this->database",
                $this->username, $this->mdp);

            } catch(PDOEXCEPTION $e) {
                return -1;
                exit(1);
            }
        }

    }
?>