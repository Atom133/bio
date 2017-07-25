<?php
require 'header.html';
$nom_a_rechercher = $_POST['recherche'];
$sql = "SELECT * FROM produits WHERE nom_prod LIKE '%$nom_a_rechercher%'";
$resultat = $db->query($sql);
?>

<div style="margin-top: 300px"></div>


<div class="container">
<?php foreach ($resultat as $product): ?>


<div class="col-md-3 text-center" style="background-color: #99CD1D;color:white;margin: 40px">
	<div class="row">
		<a href="single-product.php?nomprod=<?=$product->nom_prod?>"><img src="../forms/produits/<?=$product->nom_prod?>/<?=$product->nom_prod?>1.jpg" style="height: 300px !important" ></a>
	</div>
	<div class="row">
		<span><h5><?=$product->nom_prod?></h5></span>
	</div>

</div>
<?php endforeach ?>
</div>

<?php require 'footer.html';?>