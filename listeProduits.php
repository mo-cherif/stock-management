<?php 
    include 'produit.php';
    $prod = new Produits();
    $listeProduits = $prod->read();
?>

<style>
    table, th, td{
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>

<table>
    <tr>
        <th>Reference</th>
        <th>Designation</th>
        <th>Prix</th>
        <th>Quantite</th>
    </tr>

    <?php
        while($ligne= $listeProduits->fetch(PDO:: FETCH_ASSOC)) {
           
    ?>

        <tr>
            <td><?= $ligne['reference']?></td>
            <td><?= $ligne['designation']?></td>
            <td><?= $ligne['prix']?></td>
            <td><?= $ligne['quantite_stock']?></td>
            <td><a href="">Modifier</a></td>
            <td><a href="">Supprimer</a></td>
        </tr>
    <?php
        }
    ?>
</table>