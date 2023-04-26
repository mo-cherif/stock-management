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
            header('location:listeProduits.php');
        
        case 'Supprimer':
            $produit = new Produits();
            $produit->delete($_GET['ref']);
            header('location:listeProduits.php');
            break;
        case 'Modifier':
            header("location:listeProduits.php?ref=".$_GET['ref']);
            break;

    }




?>