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
</style>
<form action="#upload_client" method="post">
<br><br><br><br><br><br><br>
	<h1>Client</h1>
	<br><br>
	<table>
		<tr>
			<th>Label</th>
			<th class="mdl-textfield">Value</th>
		</tr>
		<tr>
			<td>
				<label for="nom">Last Name</label>
			</td>
			<td>
				<div class="mdl-textfield mdl-js-textfield">
				  <input class="mdl-textfield__input" type="text" name="nom">
				  <label class="mdl-textfield__label" for="nom">Last name...</label>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<label for="prenom">First Name</label>
			</td>
			<td>
				<div class="mdl-textfield mdl-js-textfield">
				  <input class="mdl-textfield__input" type="text" name="prenom">
				  <label class="mdl-textfield__label" for="prenom">First name..</label>
				</div>
			</td>
		</tr>
		
		<tr>
			<td>
				<label for="email">E-mail</label>
			</td>
			<td>
				<div class="mdl-textfield mdl-js-textfield">
				  <input class="mdl-textfield__input" type="text" name="email">
				  <label class="mdl-textfield__label" for="email">e-mail...</label>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<label for="password">Password</label>
			</td>
			<td>
				<div class="mdl-textfield mdl-js-textfield">
				  <input class="mdl-textfield__input" type="password" name="password">
				  <label class="mdl-textfield__label" for="password">Password...</label>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<label for="repeat_password">Repeat Password</label>
			</td>
			<td>
				<div class="mdl-textfield mdl-js-textfield">
				  <input class="mdl-textfield__input" type="password" name="repeat_password">
				  <label class="mdl-textfield__label" for="repeat_password">Repeat Password...</label>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<label for="adresse">Adresse</label>
			</td>
			<td>
				<div class="mdl-textfield mdl-js-textfield">
				  <input class="mdl-textfield__input" type="text" name="adresse">
				  <label class="mdl-textfield__label" for="adresse">adresse...</label>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<label for="carte_paiement">Paiement card</label>
			</td>
			<td>
				<div class="mdl-textfield mdl-js-textfield">
				  <input class="mdl-textfield__input" type="number" name="carte_paiement">
				  <label class="mdl-textfield__label" for="carte_paiement">Paiement card ...</label>
				</div>
			</td>
		</tr>
		<tr><td></td><td><button type="submit" name="submitClient" value="submitClient" class="btn btn-default btn-block">Submit</button></td></tr>
	</table>

	
</form>



<form action="#upload_fournisseur" method="post" enctype="multipart/form-data">
<br><br><br><br><br><br><br>
	<h1>Fournisseur</h1>
	<br><br>
	<table>
		<tr>
			<th>Label</th>
			<th class="mdl-textfield">Value</th>
		</tr>
		<tr>
			<td>
				<label for="company_name">Company Name</label>
			</td>
			<td>
				<div class="mdl-textfield mdl-js-textfield">
				  <input class="mdl-textfield__input" type="text" name="company_name">
				  <label class="mdl-textfield__label" for="company_name">Company Name...</label>
				</div>
			</td>
		</tr>
		
		
		<tr>
			<td>
				<label for="email">E-mail</label>
			</td>
			<td>
				<div class="mdl-textfield mdl-js-textfield">
				  <input class="mdl-textfield__input" type="text" name="email">
				  <label class="mdl-textfield__label" for="email">e-mail...</label>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<label for="password">Password</label>
			</td>
			<td>
				<div class="mdl-textfield mdl-js-textfield">
				  <input class="mdl-textfield__input" type="password" name="password">
				  <label class="mdl-textfield__label" for="password">Password...</label>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<label for="repeat_password">Repeat Password</label>
			</td>
			<td>
				<div class="mdl-textfield mdl-js-textfield">
				  <input class="mdl-textfield__input" type="password" name="repeat_password">
				  <label class="mdl-textfield__label" for="repeat_password">Repeat Password...</label>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<label for="adresse">Adresse</label>
			</td>
			<td>
				<div class="mdl-textfield mdl-js-textfield">
				  <input class="mdl-textfield__input" type="text" name="adresse">
				  <label class="mdl-textfield__label" for="adresse">adresse...</label>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<label for="description">Description</label>
			</td>
			<td>
				<div class="mdl-textfield mdl-js-textfield">
				  <input class="mdl-textfield__input" type="text" name="description">
				  <label class="mdl-textfield__label" for="description">Description...</label>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<label for="logo">Logo</label>
			</td>
			<td>
				<div class="mdl-textfield mdl-js-textfield">
				  <input class="mdl-textfield__input" type="file" name="logo">
				  <label class="mdl-textfield__label" for="logo">Logo...</label>
				</div>
			</td>
		</tr>
		<tr><td></td><td><button type="submit" name="submitFournisseur" value="submitFournisseur" class="btn btn-default btn-block">Submit</button></td></tr>
	</table>

	
</form>

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
				  <input class="mdl-textfield__input" type="text" name="nom_prod">
				  <label class="mdl-textfield__label" for="nom_prod">Product Name...</label>
				</div>
			</td>
		</tr>
		
		
		<tr>
			<td>
				<label for="categorie">Category</label>
			</td>
			<td>
				<div class="mdl-textfield mdl-js-textfield">
				  <input class="mdl-textfield__input" type="text" name="categorie">
				  <label class="mdl-textfield__label" for="categorie">Category...</label>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<label for="quantite">Quantity</label>
			</td>
			<td>
				<div class="mdl-textfield mdl-js-textfield">
				  <input class="mdl-textfield__input" type="number" name="quantite">
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
				  <input class="mdl-textfield__input" type="date" name="date_exp">
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<label for="prix">Price</label>
			</td>
			<td>
				<div class="mdl-textfield mdl-js-textfield">
				  <input class="mdl-textfield__input" type="number" name="prix">
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
				  <input class="mdl-textfield__input" type="text" name="description">
				  <label class="mdl-textfield__label" for="prix">Description...</label>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<label for="image1">Logo1</label>
			</td>
			<td>
				<div class="mdl-textfield mdl-js-textfield">
				  <input class="mdl-textfield__input" type="file" name="image1">
 				</div>
			</td>
		</tr>
		<tr>
			<td>
				<label for="image2">Logo2</label>
			</td>
			<td>
				<div class="mdl-textfield mdl-js-textfield">
				  <input class="mdl-textfield__input" type="file" name="image2">
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<label for="image3">Logo3</label>
			</td>
			<td>
				<div class="mdl-textfield mdl-js-textfield">
				  <input class="mdl-textfield__input" type="file" name="image3">
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<label for="image4">Logo4</label>
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



<!-- fournisseur -->
<?php
  if (isset($_POST['submitFournisseur'])) {

  	$company_name = $_POST['company_name'];
  	$email = $_POST['email'];
  	$password = $_POST['password'];
  	$adresse = $_POST['adresse'];
  	$description = $_POST['description'];


    $tmp_name = $_FILES['logo']['tmp_name'];
    $filename = "fournisseurs/". $company_name . ".jpg";
    if(!is_dir('fournisseurs'))
    	mkdir('fournisseurs');
    if (move_uploaded_file($tmp_name,$filename)) {	
      echo "Uploaded Complete ♥ ☺";
      $sql = "INSERT INTO fournisseur(company_name,email,password,adresse,description,logo) VALUES ('$company_name','$email','$password','$adresse','$description','$filename')";
     $db->update($sql);
     var_dump(move_uploaded_file($tmp_name,$filename));
    }
    else {
      
      
    }
  }
?>


<!-- client -->
<?php
  if (isset($_POST['submitClient'])) {

  	$first_name = $_POST['prenom'];
  	$last_name = $_POST['nom'];
  	$email = $_POST['email'];
  	$password = $_POST['password'];
  	$adresse = $_POST['adresse'];
  	$carte_paiement = $_POST['carte_paiement'];


    
      $sql = "INSERT INTO client(nom,prenom,email,password,adresse,carte_paiement) VALUES ('$first_name','$last_name','$email','$password','$adresse','$carte_paiement')";

      $db->update($sql);
  }
?>


<!-- produit -->
<div id="upload_produit">
	<?php
	  if (isset($_POST['submitProduit'])) {

	  	$prod_name = $_POST['nom_prod'];
	  	$categorie = $_POST['categorie'];
	  	$quantite = $_POST['quantite'];
	  	$exp_date = $_POST['date_exp'];
	  	$prix = $_POST['prix'];
	  	$description = $_POST['description'];

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