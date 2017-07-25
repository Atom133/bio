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

    public function add($product_id,$qte){
    	if(isset($_SESSION['panier'][$product_id]))
    	{
    		$_SESSION['panier'][$product_id] += $qte;
    	}
    	else
    		$_SESSION['panier'][$product_id] = 0 + $qte;
    }


    public function del($product_id){
    	unset($_SESSION['panier'][$product_id]);
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