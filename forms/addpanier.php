<?php
session_start();
require '../forms/db.class.php';
require '../forms/panier.class.php';
$db = new DB();
$panier = new panier($db);

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