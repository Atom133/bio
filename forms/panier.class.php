<?php
class panier{


	private $DB;

	public function __construct($DB){
		if(!isset($_SESSION))
		{
			session_start();   //vérifier que la session existe
		}  

		if(!isset($_SESSION['panier']))
		{
			$_SESSION['panier'] = array();
		}
		$this->DB = $DB;

		if(isset($_GET['delPanier']))
			$this->del($_GET['delPanier']);
	}

    public function add($product_nom,$qte){
    	if(isset($_SESSION['panier'][$product_nom]))
    	{
    		$_SESSION['panier'][$product_nom] += $qte;
    	}
    	else
    		$_SESSION['panier'][$product_nom] = $qte;
    }


    public function del($product_nom){
    	unset($_SESSION['panier'][$product_nom]);
    }

    public function total(){
    	$total = 0;
    	$ids = array_keys($_SESSION['panier']);
        if(empty($ids))
            $products = array();
        else
            $products =  $this->DB->query('SELECT id, price FROM produits WHERE id_prod IN ('.implode(',',$ids).')') ;
    	foreach( $products as $product)
    		$total += ($product->price)*($_SESSION['panier'][$product->id]);
    	return $total;

    }

    public function count(){
    	return array_sum($_SESSION['panier']);

    }

   
}