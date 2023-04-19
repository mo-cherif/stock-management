<?php 
    include 'produit.php';
    $ref = $_POST["des"];
    $des = $_POST["ref"];
    $prix = $_POST["prix"];
    $qtte= $_POST["qtite"];
    $operation = $_REQUEST["operation"];

    switch($operation) {
        case 'Ajouter':
            $prod = new Produits();
            $prod->create($ref, $des, $prix, $qtte);
            include 'listeProduits.php';
    }

    $prod = new Produits();
    $prod->create($ref, $des, $prix, $qtte);


?>