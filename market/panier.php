<?php
require 'header.html';

if(isset($_SESSION['panier']))
{
	$ids = array_keys($_SESSION['panier']);
	if(empty($ids))
        $products = array();
    else
        $products =  $db->query('SELECT * FROM produits WHERE id_prod IN ('.implode(',',$ids).')') ;
$total = 0;
}

?>


<div style="margin-top: 240px"></div>

<div class="row" >	
		<div class="text-center">
      <a href="#OrderModal" data-toggle="modal" data-target = "#Ordermodal" data-backdrop="false" class="btn btn-lg ct-btn-image btn-warning"><span>ORDER NOW</span></a>
    </div>
</div>

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
		Total : <?= $_SESSION['panier'][$product->id_prod] * $product->prix ?> $
	</div>
	<div class="row" style="font-size: 10px">
			<a href="panier.php?delPanier=<?= $product->id_prod; ?>" class="del" ><span class="glyphicon glyphicon-remove"></span></a>
	</div>
</div>
<?php $total += $_SESSION['panier'][$product->id_prod] * $product->prix; ?>
<?php endforeach ?>
</div>

<style>
  a {
    color: black
  }
</style>
<div class="modal fade" id="Ordermodal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <i class="fa fa-times" style="font-size:24px;margin-left: 97%" data-dismiss="modal" aria-hidden="true"></i>
      </div>
      <div class="modal-body text-center">
        <form action="valider_panier.php" action="post"> 

          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
          <a href="javascript:slideonlyone('date_livr');" id="option-select"><input type="radio" id="option-1" class="mdl-radio__button" name="type_panier" value="permenant" ></a>
          <span class="mdl-radio__label">Periodically</span>
          </label>

          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
          <a href="javascript:slideonlyone('date_livr');" id="option-hide"><input type="radio" id="option-2" class="mdl-radio__button" name="type_panier" value="pontuel" checked></a>
          <span class="mdl-radio__label">Just once</span>
          </label>

          <select name="date_livr" id="date_livr" style="display: none">  
              <option value="monday">Monday</option>
              <option value="tuesday">Tuesday</option>
              <option value="wednesday">Wednesday</option>
              <option value="thirsday">Thursday</option>
              <option value="friday">Friday</option>
              <option value="saturday">Saturday</option>
              <option value="sunday">Sunday</option>
          </select>

<br>  <br>  
          <p style="font-size: 24px">Total : <?= $total ?> $</p>
          <p style="font-size: 24px">Adresse : 
          <?php
            if(isset($_SESSION['nom'])) {
              $nom = $_SESSION['nom'];
              $sql = "SELECT * FROM client WHERE nom = '$nom'";
              $sql_adresse = $db->query($sql);
              echo $sql_adresse[0]->adresse;
            }
           ?></p>

            <div class="row" >  
                <div class="text-center">
                <button class="btn btn-lg ct-btn-image btn-warning" type="submit"><span>ORDER NOW</span></button>
                </div>
            </div>
      	</form>

      </div>
    </div>
  </div>
</div>

<script>
    $(document).ready(function() {
     $('#option-select').click(function() {
          $('#date_livr').css({
               display: 'inline'
               }, 1000
          );

     });
});

    $(document).ready(function() {
     $('#option-hide').click(function() {
          $('#date_livr').css({
               display: 'none'
               }, 1000
          );

     });
});
</script>

<?php
require 'footer.html';
?>

<?php 
if(isset($_GET['delPanier']))
	$panier->del($_GET['delPanier']);