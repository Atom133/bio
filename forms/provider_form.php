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
				  <input class="mdl-textfield__input" type="text" name="company_name" required>
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
				  <input class="mdl-textfield__input" type="email" name="email" required>
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
				  <input class="mdl-textfield__input" type="password" name="password" required>
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
				  <input class="mdl-textfield__input" type="password" name="repeat_password" required>
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
				  <input class="mdl-textfield__input" type="text" name="adresse" required>
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
				  <input class="mdl-textfield__input" type="text" name="description" required>
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
				</div>
			</td>
		</tr>
		<tr><td></td><td><button type="submit" name="submitFournisseur" value="submitFournisseur" class="btn btn-default btn-block">Submit</button></td></tr>
	</table>

	
</form>




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
