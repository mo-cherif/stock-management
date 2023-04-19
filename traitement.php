<?php 
    include 'produit.php';
    $ref = $_POST["des"];
    $des = $_POST["ref"];
    $prix = $_POST["prix"];
    $qtte= $_POST["qtite"];

    $prod = new Produits();
    $prod->create($ref, $des, $prix, $qtte);
?>