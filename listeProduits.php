<?php 
    include 'produit.php';

    $prod = new Produits();
    $listeProduits = $prod->read();
?>

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
        </tr>
    <?php
        }
    ?>
</table>