<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="login" method="post">
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
				<label for="email">E-mail</label>
			</td>
			<td>
				<div class="mdl-textfield mdl-js-textfield">
				  <input class="mdl-textfield__input" type="email" name="email" required>
				  <label class="mdl-textfield__label" for="email">E-mail...</label>
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
				  <label class="mdl-textfield__label" for="password">Password..</label>
				</div>
			</td>
		</tr>

		<tr><td></td><td><button type="submit" name="submitLogin" value="submitLogin" class="btn btn-default btn-block">Log In</button></td></tr>
	</table>

	
</form>

<div>
	<?php
		if(isset($_POST['submitLogin'])){
			require 'db.class.php';
			$db = new DB();
			session_start();
			$email = $_POST['email'];
			$password = $_POST['password'];
			$sql_client = "SELECT * FROM client WHERE email = '$email' AND password = '$password'";
			$sql_four = "SELECT * FROM fournisseur WHERE email = '$email' AND password = '$password'";
			if($res = $db->query($sql_client))
			{
				
				$_SESSION['nom'] = $res['nom'];
				$_SESSION['typeOFAccount'] = "client";
				header('Location:client_form.php');
			}
			else if($res = $db->query($sql_four))
			{
				
				$_SESSION['company_name'] = $res['company_name'];
				$_SESSION['typeOFAccount'] = "Provider";
				header('Location:client_form.php');
			}
			else
				die('erreur');
			}
		?>
</div>

</body>
</html>