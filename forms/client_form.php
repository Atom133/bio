<?php
session_start();
require 'db.class.php';
$db = new DB();

?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

<style type="text/css">
	.btnLog {
		font-size: 40px;
	}
	.btn {
		margin: 20px;border-radius: 100px; border: 1px solid white; background-color: transparent; color: white;transition: all 0.2s linear;
	}
	.btn:hover{background-color: rgba(255,230,124,0.4) !important;transform: scale(1.1);}
	.modal-body {
		background-color: #0E4749;
	}
	.modal-body {
		background-image: url('actu.jpg');
		background-size: cover;
		height: 30vh;
	}
	
</style>
<div style="background-color: black;height: 200px;">
	<button class="btn btn-default btn-lg" style="" data-toggle="modal" data-target="#exampleModal">Sign In</button>




<div class="modal fade" id="exampleModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <i class="fa fa-times" style="font-size:24px;margin-left: 97%" data-dismiss="modal" aria-hidden="true"></i>
      </div>
      <div class="modal-body text-center">

        <button class="btnLog btn btn-default">Client</button>
        <button class="btnLog btn btn-default">Provider</button>
      </div>
    </div>
  </div>
</div>
</div>


<?php

if($_SESSION['typeOFAccount'])
;

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

