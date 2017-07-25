<?php
require '../market/header.html';

if(isset($_POST['quantity']) && isset($_POST['id']))
{
	$qte = $_POST['quantity'];
	$id = $_POST['id'];


	$panier->add($id , $qte);

	die("<script>setTimeout(\"location.href = '../market/our-products.php';\",0);</script>"); 
	
}
else
	{
		die("<script>setTimeout(\"location.href = '../market/index.php';\",0);</script>");
	}
?>