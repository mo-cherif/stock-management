<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form produits</title>
</head>

<?php 
    include 'produit.php';
    $produit = new Produits();
    $getProduit = $produit->readOne($_GET['ref']);
    $unProduit = $getProduit-> FETCH();
?>
<body>
    <form action="traitement.php" method="post" >
        <input type="text" name="ref" placeholder="reference" value="<?=$unProduit["reference"];?>">
        <input type="text" name="des" placeholder="designation" value="<?=$unProduit["designation"];?>">
        <input type="text" name="prix" placeholder="prix" value="<?=$unProduit["prix"];?>">
        <input type="number" name="qtite" placeholder="quantite"value="<?=$unProduit["quantite_stock"];?>">

        <input type="submit">
        <input type="hidden" value="Modifier_un" name="operation">
    </form>
</body>
</html>