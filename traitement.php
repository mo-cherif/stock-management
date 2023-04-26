<?php 
    include 'produit.php';
    $ref = $_POST["ref"];
    $des = $_POST["des"];
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
            header("location:formProduits.php?ref=".$_GET['ref']);
            break;
        case 'Modifier_un':
            $produit = new Produits();
            $produit->update($ref, $des, $prix, $qtte);
            header("location:listeProduits.php");
            break;

    }




?>