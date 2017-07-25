<?php
require 'db.class.php';
$db = new DB();
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<style type="text/css">
	.mdl-textfield{
		margin-left: 20px
	}
	table {
		right: 0;
		left: 0;
		margin: auto;
		margin-top: -180px;
		margin-bottom: 50px
	}
	.as select, option {
    width: 100%;
    padding: 16px 20px;
    border: none;
    border-radius: 4px;
    background-color: #f1f1f1;
    color: black
}
option:hover {
	background-color: grey
}

.selectpicker {
	font-size: 18px;
	color:white;
	background-color: white;
	padding: 10px;margin-left: 20px;
}
</style>

<form action="#upload_produit" method="post" enctype="multipart/form-data">
<br><br><br><br><br><br><br>
	<h1>Product</h1>
	<br><br>
	<table>
		<tr>
			<th>Label</th>
			<th class="mdl-textfield">Value</th>
		</tr>
		<tr>
			<td>
				<label for="nom_prod">Product Name</label>
			</td>
			<td>
				<div class="mdl-textfield mdl-js-textfield">
				  <input class="mdl-textfield__input" type="text" name="nom_prod" required>
				  <label class="mdl-textfield__label" for="nom_prod">Product Name...</label>
				</div>
			</td>
		</tr>
		
		
		<tr>
			<td>
				<label for="categorie">Category</label>
			</td>
			<td>
				<select class="selectpicker" style="color: black" name="categorie">
					<option value="heathAndHygiene" selected> Health and Hygiene</option>
					<option value="fruitsAndVegetables"> Fruits and Vegetables</option>
					<option value="proteins"> Proteins</option>
					<option value="beauty"> Beauty</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<label for="quantite">Quantity (Kgs)</label>
			</td>
			<td>
				<div class="mdl-textfield mdl-js-textfield">
				  <input class="mdl-textfield__input" type="number" name="quantite" required>
				  <label class="mdl-textfield__label" for="quantite">Quantity...</label>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<label for="date_exp">Expiration Date</label>
			</td>
			<td>
				<div class="mdl-textfield mdl-js-textfield">
				  <input class="mdl-textfield__input" type="date" name="date_exp" required>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<label for="prix">Price (TND)</label>
			</td>
			<td>
				<div class="mdl-textfield mdl-js-textfield">
				  <input class="mdl-textfield__input" type="number" name="prix" required>
				  <label class="mdl-textfield__label" for="prix">Price...</label>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<label for="description">Description</label>
			</td>
			<td>
				<div class="mdl-textfield mdl-js-textfield">
				  <input class="mdl-textfield__input" type="text" name="description" required>
				  <label class="mdl-textfield__label" for="prix">Description...</label>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<label for="image1">Image1</label>
			</td>
			<td>
				<div class="mdl-textfield mdl-js-textfield">
				  <input class="mdl-textfield__input" type="file" name="image1" required>
 				</div>
			</td>
		</tr>
		<tr>
			<td>
				<label for="image2">Image2</label>
			</td>
			<td>
				<div class="mdl-textfield mdl-js-textfield">
				  <input class="mdl-textfield__input" type="file" name="image2">
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<label for="image3">Image3</label>
			</td>
			<td>
				<div class="mdl-textfield mdl-js-textfield">
				  <input class="mdl-textfield__input" type="file" name="image3">
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<label for="image4">Image4</label>
			</td>
			<td>
				<div class="mdl-textfield mdl-js-textfield">
				  <input class="mdl-textfield__input" type="file" name="image4">
				</div>
			</td>
		</tr>
		<tr><td></td><td><button type="submit" name="submitProduit" value="submitProduit" class="btn btn-default btn-block">Submit</button></td></tr>
	</table>

	
</form>



<div id="upload_produit">
	<?php
	  if (isset($_POST['submitProduit'])) {

	  	$prod_name = $_POST['nom_prod'];
	  	$categorie = $_POST['categorie'];
	  	$quantite = $_POST['quantite'];
	  	$exp_date = $_POST['date_exp'];
	  	$prix = $_POST['prix'];
	  	$description = htmlentities(trim($_POST['description']));

		$timestamp = strtotime($_POST['date_exp']);
		$date=date("Y-m-d", $timestamp);

		if(!is_dir('produits'))
    		mkdir('produits');
    	if(!is_dir('produits/'.$prod_name))
    		mkdir('produits/'.$prod_name);

	  	for($i = 1; $i < 5; $i++) {
	  	$tmp_name = $_FILES['image'.$i]['tmp_name'];
    	$filename = "produits/".$prod_name."/".$prod_name.$i.".jpg";
	echo '<br><br><br><br><br><br><br><br>';

	    if (move_uploaded_file($tmp_name,$filename) ) {
	      echo "Uploaded Complete ♥ ☺";
		}
	}    

	      $sql = "INSERT INTO produits(nom_prod,categorie,stock,date_exp,prix,description) VALUES ('$prod_name','$categorie','$quantite','$date','$prix','$description')";

	      $db->update($sql);

	  }
	?>
</div>