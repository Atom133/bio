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
				  <input class="mdl-textfield__input" type="text" name="nom" required>
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
				  <input class="mdl-textfield__input" type="text" name="prenom" required>
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

<?php
session_start();
if($_SESSION['typeOFAccount'])
	header('Location:index.php');

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

