<?php 

    class Connexion {
        public $localhost;
        public $servername;
        public $database;
        public $mdp;

        public function __construct() {
            $localhost = "localhost";
            $database = "stock";
            $username = "root";
            $mdp = "";
        }

        public function getConnexion() {
            try {
                $connexion = new PDO("mysql:host=$localhost;
                dbname=$database",
                $username, $mdp);

            } catch(PDOEXCEPTION $e) {
                return -1;
                exit(1);
            }
        }

    }
?>