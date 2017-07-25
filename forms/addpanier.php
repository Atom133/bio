<?php
require 'header.html';

if(isset($_GET['nomprod']) && isset($_GET['quantity']))
{
	$product = $DB->query('SELECT id FROM produuits WHERE nom_prod=:nom', array('nom' => $_GET['nomprod']));
	if(empty($product))
		die("Ce produit n'existe pas");


	$panier->add($product[0]->nom_prod , $_GET['quantity']);
	die("<script>setTimeout(\"location.href = 'indexphp.php';\",0);</script>"); 
}
else
	{
		die('Vous n\'avez pas selectionne de produit a ajouter au panier');
	}
?>