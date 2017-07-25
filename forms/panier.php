<?php require 'navbarenligne.php';?>




<table class="table table-bordered">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Description</th>
                  <th>Quantity</th>
				  <th>Price</th>
				  <th style="border-top: 5px solid transparent; border-right: 5px solid transparent; "></th>
                
				</tr>
              </thead>
              <?php $commande = 'Commande :' ;?>
                <body>
                
                 <?php 

                 $ids = array_keys($_SESSION['panier']);
                 if(empty($ids))
                 	$products = array();
                 else
                 	$products =  $DB->query('SELECT * FROM products WHERE id IN ('.implode(',',$ids).')') ;
                 
                 ?>
                 <?php foreach ($products as $product): ?>
                 <tr> 
                  <td> <img width="60" src="assets/img/<?= $product->id; ?>.png"" alt=""/></td>
                  <td><?= $product->name;?><br/></td>
                  <td><?= $_SESSION['panier'][$product->id];?></td>
                  <td><?= number_format($product->price,2,',','');?>$</td>
                  <!-- pour supprimer le produit-->
                  <td><a href="panier.php?delPanier=<?= $product->id; ?>" class="del" ><span class="glyphicon glyphicon-remove"></span></a></td>
                 </tr>
                 
                 <!-- Test sur le panier pour le sauvgarde dans la BD -->
                 
                <!-- End test -->

                 <?php endforeach ?> 
                
                <?php 
                $username = $_SESSION['username'];
                $connect = mysqli_connect("localhost","root","","client") or die('Error'); //connection à la DB
                mysqli_select_db($connect,"client");

                $id = mysqli_query($connect,"SELECT client_id FROM client WHERE username = '$username'");
                var_dump($id); 
                ?>
				
				
                <tr>
                  <td colspan="6" style="text-align:right">Total Price:	</td>
                  <td><?= number_format($panier->total(),2,',','');?> $</td>
                </tr>
				
				</tbody>
            </table>


		
	<a href="products.html" class="btn btn-large"><i class="icon-arrow-left"></i> Continue Shopping </a>
	<form action="#sauv" method="post"><button type="submit" name="sauvgarder">Sauvgarder<i class="icon-arrow-right"></i></a></a></button></form>
<div id="sauv">
<?php
if(isset($_POST['sauvgarder']))
{
 
 $connect = mysqli_connect("localhost","root","","client") or die('Error'); //connection à la DB
 mysqli_select_db($connect,"client");





 $inser = mysqli_query($connect,"INSERT INTO commande(client_id,adresse) VALUES('$username','tunis')"); 
 var_dump($inser);

        
} ?>
</div>
<?php require 'footer.html';?>