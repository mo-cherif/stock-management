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
        while($ligne= $res->fetch(PDO:: FETCH_ASSOC)) {
            echo $ligne["designation"];
        } 
    ?>
</table>