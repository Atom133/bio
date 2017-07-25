<?php
require 'header.html';

if(isset($_SESSION['panier']))
{
	$ids = array_keys($_SESSION['panier']);
	if(empty($ids))
        $products = array();
    else
        $products =  $db->query('SELECT * FROM produits WHERE id_prod IN ('.implode(',',$ids).')') ;
}
?>


<div style="margin-top: 200px"></div>
<div class="container">
<?php foreach ($products as $product): ?>



<div class="col-md-3 text-center" style="background-color: #99CD1D;color:white;margin: 40px">
	<div class="row">
		<img src="../forms/produits/<?=$product->nom_prod?>/<?=$product->nom_prod?>1.jpg" style="height: 300px !important" >
	</div>
	<div class="row">
		<span><h5><?=$product->nom_prod?></h5></span>
	</div>
	<div class="row" style="font-size: 22px;">
		Quantity :<?= $_SESSION['panier'][$product->id_prod] ?>
	</div>
	<div class="row" style="font-size: 22px; margin-top: 10px;">
	<div style="background-color: rgba(0,0,0,.1);width: 250px;height: 1px;right: 0;left: 0;margin: auto;margin-bottom: 10px"></div>
		Total : <?= $_SESSION['panier'][$product->id_prod] * $product->prix ?>
	</div>
	<div class="row" style="font-size: 10px">
			<a href="panier.php?delPanier=<?= $product->id_prod; ?>" class="del" ><span class="glyphicon glyphicon-remove"></span></a>
	</div>
</div>
<?php endforeach ?>
</div>



<?php
require 'footer.html';
?>

<?php 
if(isset($_GET['delPanier']))
	$panier->del($_GET['delPanier']);